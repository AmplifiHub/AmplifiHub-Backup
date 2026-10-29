<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Contract extends Entity
{

  
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'buyer_id' => true,
        'seller_id' => true,
        'beat_id' => true,
        'payment_id' => true

    ];
}
