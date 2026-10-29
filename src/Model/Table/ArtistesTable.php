<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artistes Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ArtistesTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Artiste get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artiste newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artiste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artiste|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artiste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artiste[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artiste findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArtistesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('artistes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'propertyName' => 'user_booking'
        ]);

        /* $this->belongsTo('Booked', [
          'className' => 'Users',
          'foreignKey' => 'artiste_id',
          'joinType' => 'INNER',
          'propertyName' => 'artistes_booked'
          ]); */

        $this->belongsTo('Genres', [
            'propertyName' => 'Genres',
            'foreignKey' => 'genre',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Subscriptions', [
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
            'artiste_song' => [
                'path' => 'Artistes{DS}artiste_song',
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
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'song_path', // defaults to `dir`
                    'size' => 'song_size', // defaults to `size`
                    'type' => 'song_type', // defaults to `type`
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
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('users_id')
                ->requirePresence('user_id', 'create')
                ->notEmpty('user_id');

        $validator
                ->scalar('artiste_name')
                ->requirePresence('artiste_name', 'create')
                ->notEmpty('artiste_name');


        /* $validator
          ->scalar('email')
          ->requirePresence('email', 'create')
          ->notEmpty('email'); */

        $validator
                ->scalar('song_title')
                ->requirePresence('song_title', 'create')
                ->notEmpty('song_title');

        $validator
                ->requirePresence('artiste_song', 'create')
                ->notEmpty('artiste_song');

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
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        //$rules->add($rules->existsIn(['artiste_id'], 'Booked'));

        return $rules;
    }

}
