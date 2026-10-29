<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Songwriter Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $songwriter_id
 * @property string $sample_song
 * @property string $bio
 * @property int $rating_result
 * @property string $extra_services
 * @property \Cake\I18n\FrozenTime $date_created
 * @property \Cake\I18n\FrozenTime $date_modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Songwriter[] $songwriters
 */
class Songwriter extends Entity
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
        'sample_song' => true,
        'extra_services' => true,
        'date_created' => true,
        'date_modified' => true,
        'user' => true,
        'songwriters' => true
    ];
}
