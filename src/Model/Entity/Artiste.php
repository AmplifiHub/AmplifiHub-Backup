<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artiste Entity
 *
 * @property int $id
 * @property int $users_id
 * @property int $artiste_id
 * @property string $event_date
 * @property string $duration
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Artiste[] $artistes
 */
class Artiste extends Entity
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
        'artiste_name' => true,
        'genre' => true,
        'song_title' => true,
        'email' => true,
        'facebook' => true,
        'created' => true,
        'artiste_song' => true
    ];
}
