<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Swriterequests Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SongwritersTable|\Cake\ORM\Association\BelongsTo $Songwriters
 *
 * @method \App\Model\Entity\Swriterequest get($primaryKey, $options = [])
 * @method \App\Model\Entity\Swriterequest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Swriterequest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Swriterequest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Swriterequest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Swriterequest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Swriterequest findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SwriterequestsTable extends Table
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

        $this->setTable('swriterequests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
          'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'propertyName' => 'user_booking'
        ]);
        $this->belongsTo('Songwriters', [
          'className' => 'Users',
            'foreignKey' => 'songwriter_id',
            'joinType' => 'INNER',
            'propertyName' => 'songwriter_booked'
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
            ->scalar('song_title')
            ->requirePresence('song_title', 'create')
            ->notEmpty('song_title');

        $validator
            //->scalar('job_description')
            ->requirePresence('job_description', 'create')
            ->notEmpty('job_description');
        
           $validator
            //->scalar('job_description')
            ->requirePresence('project', 'create')
            ->notEmpty('project');

        $validator
            ->scalar('reference_link')
            ->requirePresence('reference_link', 'create')
          ->notEmpty('reference_link');

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
        $rules->add($rules->existsIn(['songwriter_id'], 'Users'));

        return $rules;
    }
}
