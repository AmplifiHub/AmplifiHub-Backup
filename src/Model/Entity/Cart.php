<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cart Entity
 *
 * @property int $id
 * @property string $carts
 */
class Cart extends Entity
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
        'trans_ref' => true,
        'beat_id' => true,
        'sample_id' => true,
        'pack_id' => true,
        'beat_type' => true,
        'beat_name' => true,
        'buyer_id' => true,
        'seller_id' => true,
        'amount' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];
}
