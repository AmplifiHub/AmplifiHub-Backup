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
class TrackTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('track');
        
        $this->setDisplayField('ar_name1');
        $this->setDisplayField('ar_name2');
        $this->setDisplayField('ar_name3');
        $this->setDisplayField('amount');
        $this->setDisplayField('booking');
        $this->setDisplayField('song_title');
        $this->setDisplayField('composers');
        $this->setDisplayField('authors');
        $this->setDisplayField('advisory');
        $this->setDisplayField('production_year');
        $this->setDisplayField('album_title');
        $this->setDisplayField('label');
        $this->setDisplayField('genre');
        $this->setDisplayField('remarks');
        $this->setDisplayField('links');
        $this->setDisplayField('uploaded_to');
        
        
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        
                
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
           
        
         'song' => [
                'path' => 'Stores{DS}sample_name',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'song_path', // defaults to `dir`
                    'size' => 'song_size', // defaults to `size`
                    'type' => 'song_type', // defaults to `type`
                ],
                'nameCallback' => function ($data) {
                    $temp = explode(".", $data["name"]);
                    $data['name'] = md5(uniqid()) . '_' . time() . '.' . end($temp);
                    return strtolower($data['name']);
                },
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
                ->allowEmpty('song', 'update')
                ->add('song', 'notaudiotype', [
                    'rule' => ['mimeType', ['application/zip']],
                    'message' => 'Your track must be a zip file',
                ])
                ->add('song', 'uploadsizeerr', [
                    'rule' => function($value, $context) {
                        return ($context['data']['song']['size'] <= 504857600);
                    },
                    'message' => 'You are on lease licence. Your upload shouldn\'t be more than 50mb'
                ])
                ->add('file', 'fileFileUpload', [
                    'rule' => 'isFileUpload',
                    'message' => 'There was no file found to upload',
                    'provider' => 'upload'
        ]);

 

        $validator
                ->scalar('ar_name1')
                ->notEmpty('ar_name1')
                ->requirePresence('ar_name1');
        $validator
                        ->scalar('user_id')
                        ->notEmpty('user_id')
                        ->requirePresence('user_id');

        $validator
                ->scalar('genre')
                ->notEmpty('genre');
                
        $validator
                ->scalar('amount')
                ->notEmpty('amount');
                
            
                $validator
                ->scalar('label')
                ->notEmpty('label')
                ->requirePresence('label');

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
                ->scalar('song_title')
                ->notEmpty('song_title')
                ->requirePresence('song_title', 'Please fill this field');
                
                $validator
                ->scalar('album_title')
                ->notEmpty('album_title')
                ->requirePresence('album_title', 'Please fill this field');

        

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
        //$rules->add($rules->existsIn(['genre'], 'Genres'));

        return $rules;
    }

}
