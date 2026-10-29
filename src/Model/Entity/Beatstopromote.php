<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Rating Entity
 *
 * @property int $id
 * @property int $status
 * @property int $days
 * @property int $status
 * @property int $start_date
 * @property int $end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Beatstopromote extends Entity
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
        'store_id' => true,
        'status' => true,
        'days' => true,
        'start_date' => true,
        'end_date' => true,
        'created' => true,
        'modified' => true
        
    ];

     public function beatname($id) {
      
    }
    
}

