<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mmrequesters Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Mmrequester get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mmrequester newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mmrequester[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mmrequester|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mmrequester patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mmrequester[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mmrequester findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MmrequestersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mmrequesters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'propertyName' => 'user_booking'
        ]);

        $this->belongsTo('Requester', [
            'className' => 'Users',
            'foreignKey' => 'requester_id',
            'joinType' => 'INNER',
            'propertyName' => 'requester_booking'
        ]);

        $this->hasMany('Messages',[
           'foreignKey' => 'orderid',
           'joinType' => 'INNER'
         ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('artist_band_name')
            ->requirePresence('artist_band_name', 'create')
            ->notEmpty('artist_band_name');

        $validator
            ->scalar('project_name')
            ->requirePresence('project_name', 'create')
            ->notEmpty('project_name');

        $validator
            ->scalar('song_description')
            ->requirePresence('song_description', 'create')
            ->notEmpty('song_description');

        $validator
            ->scalar('service_request')
            ->requirePresence('service_request', 'create')
            ->notEmpty('service_request');

        $validator
            ->scalar('download_link')
            ->requirePresence('download_link', 'create')
            ->notEmpty('download_link');

        $validator
            ->date('deadline')
            ->requirePresence('deadline', 'create')
            ->notEmpty('deadline');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['requester_id'], 'Requester'));

        return $rules;
    }
}
