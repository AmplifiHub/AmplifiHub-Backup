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
class Track extends Entity
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
        'ar_name1' => true,
        'ar_name2' => true,
        'ar_name3' => true,
        'amount' => true,
        'composers' => true,
        'authors' => true,
        'advisory' => true,
        'production_year' => true,
        'album_title' => true,
        'label' => true,
        'booking' => true,
        'song_title' => true,
        'song' => true,
        'song_path' => true,
        'song_size' => true,
        'song_type' => true,
        'genre' => true,
        'remarks' => true,
        'links' => true,
        'country_of_release' => true,
        'release_date' => true,
        'uploaded_to' => true,
        'created' => true,
        'executive_producers' => true,
	    'record_label_copyright_name' => true,
    	'producer_publisher' => true,
	    'main_artist_real_name' => true,
	    'producer_real_name' => true,
	    'mixing_and_mastering_engineer' => true,
	    'performers_real_name' => true,
	    'writers_real_name' => true,
	    'lyricist_real_name' => true,
	    'lyrics' => true,
	    'language' => true,
	    'recording_location' => true,
	    'pre_order_date' => true,
	    'delivery_stores' => true,
	    'graph' => true,
    ];
    
    public function _setDeliveryStores($stores) {
        if ($stores === null) {
            return null;
        }

        return json_encode($stores);
    }
}
