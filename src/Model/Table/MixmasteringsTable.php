<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mixmasterings Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Mixmastering get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mixmastering newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mixmastering[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mixmastering|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mixmastering patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mixmastering[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mixmastering findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MixmasteringsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('mixmasterings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Genres', [
            'propertyName' => 'Genres',
            'foreignKey' => 'genre',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Subscriptions', [
            'propertyName' => 'Subscriptions',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            'original' => [
                'path' => 'Mixmasterings{DS}original',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'nameCallback' => function ($data) {
                    $temp = explode(".", $data["name"]);
                    $data['name'] = md5(uniqid()) . '_' . time() . '.' . end($temp);
                    return strtolower($data['name']);
                },
                'fields' => [
                    'dir' => 'original_dir', // defaults to `dir`
                    'size' => 'original_size', // defaults to `size`
                    'type' => 'original_type', // defaults to `type`
                ],
            ],
            'after' => [
                'path' => 'Mixmasterings{DS}after',
                // our S3 adapter
                'filesystem' => [
                    'adapter' => $adapter,
                ],
                'nameCallback' => function ($data) {
                    $temp = explode(".", $data["name"]);
                    $data['name'] = md5(uniqid()) . '_' . time() . '.' . end($temp);
                    return strtolower($data['name']);
                },
                'fields' => [
                    'dir' => 'after_dir', // defaults to `dir`
                    'size' => 'after_size', // defaults to `size`
                    'type' => 'after_type', // defaults to `type`
                ],
            ],
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {

        $validator->provider('upload', \Josegonzalez\Upload\Validation\DefaultValidation::class);

        $validator->add('file', 'fileSuccessfulWrite', [
            'rule' => 'isSuccessfulWrite',
            'message' => 'Your file upload failed. Kindly Try again',
            'provider' => 'upload',
            'on' => function($context) {
                return !empty($context['data']['file']) && $context['data']['file']['error'] == UPLOAD_ERR_OK;
            }
        ]);

        /*  $validator->add('file','notfiletype',[
          'rule' => ['mimetype',['audio/mp3','audio/mpeg']],
          'provider' => 'upload',
          ]); */


        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->integer('genre')
                ->requirePresence('genre', 'create')
                ->notEmpty('genre');

        $validator
                ->requirePresence('original', 'create')
                ->notEmpty('original');

        $validator
                ->requirePresence('after', 'create')
                ->notEmpty('after');

        /*
          $validator
          ->scalar('original_dir')
          ->requirePresence('original_dir', 'create')
          ->notEmpty('original_dir');

          $validator
          ->scalar('original_size')
          ->requirePresence('original_size', 'create')
          ->notEmpty('original_size');

          $validator
          ->scalar('original_type')
          ->requirePresence('original_type', 'create')
          ->notEmpty('original_type');
         */

        $validator
                ->scalar('work_status')
                ->requirePresence('work_status', 'create')
                ->notEmpty('work_status');

        $validator
                ->scalar('payment_status')
                ->requirePresence('payment_status', 'create')
                ->notEmpty('payment_status');

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

        return $rules;
    }

}
