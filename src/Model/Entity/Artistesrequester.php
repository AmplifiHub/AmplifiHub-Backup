<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artistesrequester Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $artiste_id
 * @property \Cake\I18n\FrozenTime $event_date
 * @property \Cake\I18n\FrozenTime $duration
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Artiste $artiste
 */
class Artistesrequester extends Entity
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
        'job_description' => true,
        'artiste_id' => true,
        'orderid' => true,
        'event_date' => true,
        'duration' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'performance_time' => true,
        'phone_number' => true,
        'event_attire' => true,
        'event_country' => true,
        'event_state' => true,
        'event_city' => true,
        'address_one' => true,
        'address_two' => true,
        'name_of_event' => true,
        'name_of_venue'=> true,
        'user' => true,
        'artiste' => true
    ];
}
