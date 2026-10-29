<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Songwriters Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SongwritersTable|\Cake\ORM\Association\BelongsTo $Songwriters
 * @property \App\Model\Table\SongwritersTable|\Cake\ORM\Association\HasMany $Songwriters
 *
 * @method \App\Model\Entity\Songwriter get($primaryKey, $options = [])
 * @method \App\Model\Entity\Songwriter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Songwriter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Songwriter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Songwriter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Songwriter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Songwriter findOrCreate($search, callable $callback = null, $options = [])
 */
class SongwritersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('songwriters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Songwriters', [
            'foreignKey' => 'songwriter_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Songwriters', [
            'foreignKey' => 'songwriter_id'
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
            'sample_song' => [
                'path' => 'Songwriters{DS}sample_song',
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
                    'dir' => 'sample_song_dir', // defaults to `dir`
                    'size' => 'sample_song_size', // defaults to `size`
                    'type' => 'sample_song_type', // defaults to `type`
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
                //->scalar('sample_song')
                ->requirePresence('sample_song', 'create')
                ->notEmpty('sample_song');

        $validator
                ->scalar('extra_services')
                ->requirePresence('extra_services', 'create')
                ->notEmpty('extra_services');


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
        $rules->add($rules->existsIn(['songwriter_id'], 'Songwriters'));

        return $rules;
    }

}
