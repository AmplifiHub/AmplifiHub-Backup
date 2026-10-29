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
class SampleStore extends Entity
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
        'sampleb_path' => true,
        'sampleb_size' => true,
        'sampleb_type' => true,
        'sample_name' => true,
        'sample_price' => true,
        'sample_type' => true,
        'sample_genre' => true,
        'sample_year' => true,
        'sample_beat' => true,
        'sample_wave' => true,
        'samplev_path' => true,
        'samplev_size' => true,
        'samplev_type' => true,
        'created' => true,
        'year' => true
    ];
}
