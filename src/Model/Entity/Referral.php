<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Rating Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $rater
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Referral extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'referral_id' => true,
        'created' => true,
        'modified' => true
        
    ];

     public function fullname($id) {
         $userTable = TableRegistry::get('Users');
        $user = $userTable->get($id, [
            'contain' => []
        ]);
        return $user->firstname . " ". $user->lastname ."(" .$user->email . ")";
    }
    
}

