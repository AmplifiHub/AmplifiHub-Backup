<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PageBanner Entity
 *
 * @property int $id
 * @property int $page
 * @property string $file_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PageBanner extends Entity
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
        'page' => true,
        'file_name' => true,
        'header_text'=>true,
        'created' => true,
        'modified' => true
    ];
}
