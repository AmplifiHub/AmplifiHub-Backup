<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Swriterequest Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $songwriter_id
 * @property string $song_title
 * @property string $job_description
 * @property string $reference_link
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Songwriter $songwriter
 */
class Swriterequest extends Entity
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
        'songwriter_id' => true,
        'song_title' => true,
        'job_description' => true,
        'reference_link' => true,
        'project' => true,
        'created' => true,
        'orderid' => true,
        'status' => true,
        'modified' => true,
        'user' => true,
        'songwriter' => true
    ];
}
