<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $senderId
 * @property int $receiverId
 * @property string $message
 * @property \Cake\I18n\FrozenTime $sentTime
 */
class Offerhire extends Entity
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
        'requester_id' => true,
        'amount' => true,
        'description' => true,
        'order_id' => true,
    ];
}
