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
class Store extends Entity
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
        'cover' => true,
        'name' => true,
        'music_genre' => true,
        'lease_price' => true,
        'premium_price' => true,
        'exclusive_price' => true,
         'sample_name' => true,
        'sample_path' => true,
        'sample_size' => true,
        'lease_name' => true,
        'lease_path' => true,
        'lease_access' => true,
        'lease_size' => true,
        'hire' => true,
        /*'premium_name' => true,
        'premium_path' => true,
        'premium_size' => true,*/
        'exclusive_name' => true,
        'exclusive_path' => true,
        'exclusive_size' => true,
        'bpm' => true,
        'discount' => true,
        'watermark' => true,
        'length' => true,
        'promoted' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'genre' => true,
        'tnx_reference' => true
    ];
}
