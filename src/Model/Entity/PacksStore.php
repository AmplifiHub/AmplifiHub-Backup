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
class PacksStore extends Entity
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
        'sample_image' => true,
        'cover_path' => true,
        'cover_size' => true,
        'cover_type' => true,
        'packs_zip' => true,
        'packs_path' => true,
        'packs_size' => true,
        'packs_type' => true,
        'packs_zip' => true,
        'sample_name' => true,
        'sample_price' => true,
        'packs_description' => true,
        'packs_information' => true,
        'sample_genre' => true,
        'sample_year' => true,
        'created' => true
    ];
}
