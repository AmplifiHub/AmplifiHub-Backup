<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mixmastering Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $genre
 * @property string $song
 * @property string $song_dir
 * @property string $song_size
 * @property string $song_type
 * @property string $work_status
 * @property string $payment_status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Mixmastering extends Entity
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
        'genre' => true,
        'original' => true,
        'original_dir' => true,
        'original_size' => true,
        'original_type' => true,
        'after' => true,
        'after_dir' => true,
        'after_size' => true,
        'after_type' => true,
        'work_status' => true,
        'payment_status' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
