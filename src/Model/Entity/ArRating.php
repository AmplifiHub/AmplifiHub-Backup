<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Store Entity
 *
 * @property int $id
 * @property string $user_id
 * @property string $genre
 * @property string $beat_price
 * @property string $beat_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Genre $genre
 */
class ArRating extends Entity
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
        
        'track_id' => true,
        'instrumental' => true,
        'vocals' => true,
        'delivery' => true,
        'lyrics' => true,
        'composition' => true,
        'mixing' => true,
        'target' => true,
        'street' => true,
        'commercial' => true,
        'overall' => true,
        'feedback' => true,
        'user_id' => true,
        'submitted' => true
    ];
}
