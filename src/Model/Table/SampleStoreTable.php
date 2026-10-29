<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Network\Session;

/**
 * Stores Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Store get($primaryKey, $options = [])
 * @method \App\Model\Entity\Store newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Store[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Store|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Store patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Store[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Store findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SampleStoreTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('sample_store');
        
        $this->setDisplayField('sample_name');
        $this->setDisplayField('sample_price');
        $this->setDisplayField('sample_type');
        $this->setDisplayField('sample_year');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Genres')
                ->setForeignKey('sample_genre')
                ->setJoinType('INNER');
                
        $this->belongsTo('Users')
                ->setForeignKey('user_id')
                ->setJoinType('INNER')
        ;

        
        $client = \Aws\S3\S3Client::factory([
                    'credentials' => [
                        'key' => 'AKIAI7SUTZJLQ56WM7CQ',
                        'secret' => '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',
                    ],
                    'region' => 'us-east-2',
                    'version' => 'latest',
        ]);
        $adapter = new \League\Flysystem\AwsS3v3\AwsS3Adapter(
                $client, 'amplifihub'
        );
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            // You can configure as many upload fields as possible,
            // where the pattern is `field` => `config`
            //
                  // Keep in mind that while this plugin does not have any limits in terms of
            // number of files uploaded per request, you should keep this down in order
            // to decrease the ability of your users to block other requests.
            'sample_beat' => [
                'path' => 'Stores{DS}sample_name',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'nameCallback' => function ($data, $settings) {
                    $temp = explode(".", $data["name"]);
                    $data['name'] = md5(uniqid()) . '_' . time() . '.' . end($temp);
                    return strtolower($data['name']);
                },
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'sampleb_path', // defaults to `dir`
                    'size' => 'sampleb_size', // defaults to `size`
                    'type' => 'sampleb_type', // defaults to `type`
                ],
            ],
            'sample_wave' => [
                'path' => 'Stores{DS}sample_name',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'samplev_path', // defaults to `dir`
                    'size' => 'samplev_size', // defaults to `size`
                    'type' => 'samplev_type', // defaults to `type`
                ],
                'nameCallback' => function ($data) {
                    $temp = explode(".", $data["name"]);
                    $data['name'] = md5(uniqid()) . '_' . time() . '.' . end($temp);
                    return strtolower($data['name']);
                },
            ],
        
            'sample_image' => [
                'path' => 'Stores{DS}cover',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'fields' => [
                    'dir' => 'cover_path',
                    'size' => 'cover_size',
                    'type' => 'cover_type',
                ],
                'nameCallback' => function ($data, $settings) {
                    $temp = explode(".", $data["name"]);
                    $data['name'] = md5(uniqid()) . '_' . time() . '.' . end($temp);
                    return strtolower($data['name']);
                },
                'transformer' => function ($table, $entity, $data, $field, $settings) {

                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(120, 120);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();

                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                            ->thumbnail($size, $mode)
                            ->save($tmp);

                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
                    ];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field}
                    ];
                },
                'keepFilesOnDelete' => false
            ],
        ]);
    }

    /*
     * read cart data from session
     */

    public function readProduct() {
        $session = new Session();
        $session->read('cart');
        return $session;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator->provider('upload', \Josegonzalez\Upload\Validation\DefaultValidation::class);

        $validator
                ->add('sample_image', 'fileSuccessfulWrite', [
                    'rule' => 'isSuccessfulWrite',
                    'message' => 'Your file upload failed. Kindly Try again',
                    'provider' => 'upload',
                    'on' => function($context) {
                        return !empty($context['data']['sample_image']) && $context['data']['sample_image']['error'] == UPLOAD_ERR_OK;
                    }
        ]);

        $validator
                ->allowEmpty('sample_image', 'update')
                //->requirePresence('cover','create')
                ->add('sample_image', 'notfiletype', [
                    'rule' => ['mimetype', ['image/png', 'image/jpeg', 'image/jpg']],
                    'message' => 'Your image must be in png or jpeg file extension',
        ]);

        $validator
                ->allowEmpty('sample_beat', 'update')
                ->add('sample_beat', 'notaudiotype', [
                    'rule' => ['mimeType', ['audio/mp3', 'audio/mpeg3', 'audio/mpeg']],
                    'message' => 'Your beat must be an mp3 file',
                ])
                ->add('sample_beat', 'uploadsizeerr', [
                    'rule' => function($value, $context) {
                        return ($context['data']['sample_beat']['size'] <= 104857600);
                    },
                    'message' => 'Please this is a sample beat. Your upload shouldn\'t be more than 10mb'
                ])
                ->add('file', 'fileFileUpload', [
                    'rule' => 'isFileUpload',
                    'message' => 'There was no file found to upload',
                    'provider' => 'upload'
        ]);


        $validator
                ->allowEmpty('sample_wave', 'update')
                ->add('sample_wave', 'notaudiotype', [
                    'rule' => ['extension', ['wav', 'WAV']],
                    'message' => 'Your beat must be an wave file',
                ])
                ->add('sample_wave', 'uploadsizeerr', [
                    'rule' => function($value, $context) {
                        return ($context['data']['sample_wave']['size'] <= 104857600);
                    },
                    'message' => 'You are on lease licence. Your upload shouldn\'t be more than 10mb'
                ])
                ->add('file', 'fileFileUpload', [
                    'rule' => 'isFileUpload',
                    'message' => 'There was no file found to upload',
                    'provider' => 'upload'
        ]);

        
        

        $validator
                ->scalar('sample_name')
                ->notEmpty('sample_name')
                ->requirePresence('sample_name');
        $validator
                        ->scalar('user_id')
                        ->notEmpty('user_id');

        $validator
                ->scalar('sample_price')
                ->notEmpty('sample_price')
                ->requirePresence('sample_price');

        $validator
                ->scalar('sample_genre')
                ->notEmpty('sample_genre');

        /*$validator
                ->scalar('lease_price')
                ->allowEmpty('lease_price', 'update')
                ->allowEmpty('lease_price', 'create')
                //->requirePresence('lease_price','create')
                ->add('lease_price', 'custom', [
                    'rule' => function($value, $context) {
                        if ($value < 5000) {
                          //  return false;
                        }
                        return true;
                    },
                    'message' => 'Please, your Lease price should not be less than 5000 naira'
        ]); */


       



        $validator
                ->scalar('sample_type')
                ->notEmpty('sample_type')
                ->requirePresence('sample_type', 'Please fill this field');

        $validator
                ->scalar('sample_year')
                ->notEmpty('sample_year', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['genre'], 'Genres'));

        return $rules;
    }

}
