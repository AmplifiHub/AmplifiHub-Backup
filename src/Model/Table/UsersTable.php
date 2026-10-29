<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Muffin\Tokenize;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('fullname');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Muffin/Tokenize.Tokenize', [
            'fields' => ['email'],
            'implementedEvents' => [
                'Model.beforeSave' => 'beforeSave',
                'Model.afterSave' => 'afterSave',
            ],
        ]);

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
            'photo' => [
                'path' => 'Users{DS}photo',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
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
                    $size = new \Imagine\Image\Box(200, 200);
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

        $this->hasMany('Stores');
        $this->hasMany('Genres');
        $this->hasMany('Accounts');
        $this->hasMany('Artistes');
        $this->hasMany('Users');
        $this->hasMany('Subscriptions');
        $this->hasMany('MixMasterings');
        $this->hasMany('Songwriters');
        $this->hasMany('Directors');
        $this->hasOne('Bankbalances');
        $this->hasMany('Comments');
        $this->hasMany('Likes');
        $this->hasMany('Messages');
        $this->hasMany('Artistesrequesters');
        $this->hasMany('Directorequests');
        $this->hasMany('Swriterequests');
        $this->hasMany('Mmrequesters');
    }

    public function afterSave($entity) {
        //  debug($entity->id);
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
                ->allowEmpty('photo');

        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('email')
                ->email('email')
                ->requirePresence('email', 'create')
                ->notEmpty('email');

        $validator
                ->scalar('firstname')
                ->requirePresence('firstname', 'create')
                ->allowEmpty('firstname');

        $validator
                ->scalar('lastname')
                ->requirePresence('lastname', 'create')
                ->allowEmpty('lastname');



        $validator
                ->scalar('state')
                ->allowEmpty('state');

        $validator
                ->scalar('zip')
                ->allowEmpty('zip');

        $validator
                ->scalar('fullname')
                ->allowEmpty('fullname');

        $validator
                ->scalar('aka')
                //->requirePresence('aka','update')
                ->allowEmpty('aka');


        $validator
                ->scalar('phone')
                ->allowEmpty('phone');

        $validator
                ->scalar('country')
                ->allowEmpty('country');
        $validator
                ->scalar('accounttype')
                ->allowEmpty('accounttype');

        $validator
                ->scalar('password')
                ->requirePresence('password', 'create')
                ->notEmpty('password')
                ->add('password', 'length', [
                    'rule' => ['minLength', '8'],
                    'message' => 'Minimum 8 characters long']);


        $validator
                ->sameAs('confirm_password', 'password', 'Passwords are must be the same');

        $validator
                ->notEmpty('accept');




        $validator
                ->notEmpty('role', ['message' => 'Please select a role'])
                /*  ->add('role',[
                  'multiple' => [
                  'rule' => ['multiple',['min' => 1]],
                  'message' => 'Please enter a valid role'
                  ]
                  ]); */
                ->add('role', 'inList', [
                    'rule' => ['inList', ['admin', 'user']],
                    'message' => 'Please enter a valid role'
        ]);

        $validator
                ->add('popular', 'inList', [
                    'rule' => ['inList', ['popular', 'ordinary']],
                    'message' => 'Kindly enter a valid option'
        ]);

        $validator
                ->scalar('facebook')
                //->requirePresence('facebook', 'update')
                ->allowEmpty('facebook');

        $validator
                ->scalar('twitter')
                //->requirePresence('twitter', 'update')
                ->allowEmpty('twitter');

        $validator
                ->scalar('instagram')
                //requirePresence('instagram', 'update')
                ->allowEmpty('instagram');

        $validator
                ->scalar('youtube')
                //->requirePresence('youtube', 'update')
                ->allowEmpty('youtube');

        $validator
                ->scalar('address')
                //->requirePresence('address', 'update')
                ->allowEmpty('address');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['aka']));

        return $rules;
    }

}
