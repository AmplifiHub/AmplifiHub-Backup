<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Levels Model
 *
 * @method \App\Model\Entity\Plan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BeatstopromoteTable extends Table
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

        $this->setTable('beatstopromote');
        $this->setDisplayField('store_id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
           $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
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
            ->scalar('store_id')
            ->requirePresence('store_id', 'create')
            ->notEmpty('store_id');

             $validator
            ->scalar('status')
            ->requirePresence('status','create')
            ->notEmpty('status');
        
            $validator
            ->scalar('days')
            ->requirePresence('days','create')
            ->notEmpty('days');
                
             $validator
            ->scalar('start_date')
            ->requirePresence('start_date','create')
            ->allowEmpty('status');
                        
            $validator
            ->scalar('end_date')
            ->requirePresence('end_date','create')
            ->allowEmptyEmpty('end_date');

        return $validator;
    }
}
