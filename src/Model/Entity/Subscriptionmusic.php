<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subscriptionmusic Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $level
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Subscriptionmusic extends Entity
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
        'customer_id' => true,
        'plan_id' => true,
        'subscription_code' => true,
        'level_id' => true,
        'status' => true,
        'subscription_status' => true,
        'tnx_reference' => true,
        'subscription_code' => true,
        'email_token' => true,
        'created' => true,
        'expiry' => true,
        'user' => true
    ];
}
