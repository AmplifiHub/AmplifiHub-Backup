<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Complaints Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Complaint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Complaint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Complaint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Complaint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Complaint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Complaint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Complaint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComplaintsTable extends Table
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

        $this->setTable('complaints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('complainer', [
            'className' => 'Users',
            'foreignKey' => 'plaintiff_id',
            'joinType' => 'INNER',
            'propertyName' => 'plaintiff'
        ]);
        $this->belongsTo('accused', [
            'className' => 'Users',
            'foreignKey' => 'accused_id',
            'joinType' => 'INNER',
            'propertyName' => 'accused'
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
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->scalar('rant')
            ->requirePresence('rant', 'create')
            ->notEmpty('rant');

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
        //$rules->add($rules->existsIn(['plaintiff_id'], 'Users'));
        //$rules->add($rules->existsIn(['accused_id'], 'Users'));

        return $rules;
    }
}
