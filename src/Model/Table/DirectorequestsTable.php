<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Directorequests Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\DirectorsTable|\Cake\ORM\Association\BelongsTo $Directors
 *
 * @method \App\Model\Entity\Directorequest get($primaryKey, $options = [])
 * @method \App\Model\Entity\Directorequest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Directorequest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Directorequest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Directorequest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Directorequest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Directorequest findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DirectorequestsTable extends Table
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

        $this->setTable('directorequests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Directors', [
          'className' => 'Users',
            'foreignKey' => 'director_id',
            'joinType' => 'INNER'
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
            ->scalar('video_type')
            ->requirePresence('video_type', 'create')
            ->notEmpty('video_type');

        $validator
            ->scalar('brief')
            ->requirePresence('brief', 'create')
            ->notEmpty('brief');

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
        $rules->add($rules->existsIn(['director_id'], 'Directors'));

        return $rules;
    }
}
