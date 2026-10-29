<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artistesrequesters Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ArtistesTable|\Cake\ORM\Association\BelongsTo $Artistes
 *
 * @method \App\Model\Entity\Artistesrequester get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artistesrequester newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artistesrequester[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artistesrequester|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artistesrequester patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artistesrequester[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artistesrequester findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArtistesrequestersTable extends Table
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

        $this->setTable('artistesrequesters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'propertyName' => 'user_booking'
        ]);
        $this->belongsTo('Artistes', [
          'className' => 'Users',
            'foreignKey' => 'artiste_id',
            'joinType' => 'INNER',
            'propertyName' => 'artistes_booked'
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
                ->requirePresence('job_description', 'create')
                ->notEmpty('job_description');

        $validator
            //->date('event_date')
            ->requirePresence('event_date', 'create')
            ->notEmpty('event_date');

        $validator
            ->scalar('duration')
            ->requirePresence('duration', 'create')
            ->notEmpty('duration');

        $validator
            ->integer('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number')
            ->lengthBetween('username', [12, 14]);

        $validator
            ->scalar('performance_time')
            ->requirePresence('performance_time', 'create')
            ->notEmpty('performance_time');

          $validator
              ->scalar('event_attire')
              ->requirePresence('event_attire', 'create')
              ->notEmpty('event_attire');

          $validator
              ->scalar('event_country')
              ->requirePresence('event_country', 'create')
              ->notEmpty('event_country');

            $validator
                  ->scalar('event_state')
                  ->requirePresence('event_state', 'create')
                  ->notEmpty('event_state');

            $validator
                    ->scalar('event_city')
                    ->requirePresence('event_city', 'create')
                    ->notEmpty('event_city');

          $validator
                  ->scalar('name_of_event')
                  ->requirePresence('name_of_event', 'create')
                  ->notEmpty('name_of_event');

          $validator
                  ->scalar('name_of_venue')
                  ->requirePresence('name_of_venue', 'create')
                  ->notEmpty('name_of_venue');

            $validator
                  ->scalar('address_one')
                  ->requirePresence('address_one', 'create')
                  ->notEmpty('address_one');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['artiste_id'], 'Artistes'));

        return $rules;
    }
}
