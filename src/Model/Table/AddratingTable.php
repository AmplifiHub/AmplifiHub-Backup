<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Network\Session;

/**
 * Stores Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Store get($primaryKey, $options = [])
 * @method \App\Model\Entity\Store newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Store[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Store|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Store patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Store[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Store findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AddratingTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('addrating');
        
        $this->setDisplayField('rating');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        

        
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
           
        
      
            
            
            
        ]);
    }

    /*
     * read cart data from session
     */

    public function readProduct() {
        $session = new Session();
        $session->read('cart');
        return $session;
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
                ->scalar('rating')
                ->notEmpty('rating')
                ->requirePresence('rating');
        
        

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
        //$rules->add($rules->existsIn(['genre'], 'Genres'));

        return $rules;
    }

}
