<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use Cake\Network\Session;

/**
 * Carts Model
 *
 * @method \App\Model\Entity\Cart get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cart newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cart|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cart[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cart findOrCreate($search, callable $callback = null, $options = [])
 */
class CartsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('carts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Stores', [
            'foreignKey' => 'beat_id',
            // 'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('SampleStore', [
            'foreignKey' => 'sample_id',
            // 'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('PacksStore', [
            'foreignKey' => 'pack_id',
            // 'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('Users', [
            'foreignKey' => 'buyer_id',
            'joinType' => 'INNER'
        ]);
    }

    /*
     * add a product to cart
     */

    public function addProduct($cartitem) {
        $allProducts = $this->readProduct(); //reads the from session

        // $this->saveProduct($allProducts); //write to the session for same key
        // $productId = $cartitem['id'];
        /* $productId = $cartitem['id'];
          $productprice = $cartitem['price']; */
        if (null != $allProducts) {
            array_push($allProducts, $cartitem); //push the new value to array
            $this->saveProduct($allProducts);
        } else {
            $allProducts[] = $cartitem;
            $this->saveProduct($allProducts);
        }
    }

    /*
     * get total count of products
     */

    public function getCount() {
        $allProducts = $this->readProduct();

        $count = 0;
        if (!empty($allProducts)) {
            if (count($allProducts) < 1) {
                return 0;
            }
            $count = count($allProducts);
        }
        
        return $count;
    }

    /*
     * save data to session
     */

    public function saveProduct($cartitems) {
        $session = new Session();
        
        $newArray = array();
        $inCart = array();
        
        foreach ( $cartitems AS $key => $line ) {
            if ( !in_array($line['id'].$line['license'], $inCart) ) {
                $inCart[] = $line['id'].$line['license'];
                $newArray[] = $line;
            }
        }
        
        $cart = $newArray;
        $newArray = NULL;
        $inCart = NULL;
        
        $session->write('cart', $cart);
        return $session;
    }

    /*
     * read cart data from session
     */

    public function readProduct() {
        $session = new Session();
        return $session->read('cart');
        //return $session->read('price');
    }

    /*
     * remove from database beat deleted by user
     */

    public function remove($id, $license) {
        $cartsTable = TableRegistry::get('Carts');
        $items;
        switch ($license) {
            case 'sample':
            case 'playlist':
                $items = $cartsTable->find('all', ['conditions' => ['sample_id' => $id, 'beat_type' => $license]])->toArray();
                break;
            case 'pack':
                $items = $cartsTable->find('all', ['conditions' => ['pack_id' => $id, 'beat_type' => $license]])->toArray();
                break;
            
            default:
                $items = $cartsTable->find('all', ['conditions' => ['beat_id' => $id, 'beat_type' => $license]])->toArray();
                break;
        }
        return $items;
    }

    /*
     * update paid
     */

    public function paid($reference, $userid, $amount = null, $beseller = null, $naseller = null) {

        $cartsTable = TableRegistry::get('Carts');
        return $cartsTable->updateAll(
                        ['status' => 'paid'], // fields
                        ['trans_ref' => $reference, 'buyer_id' => $userid] // conditions
        );
    }
    
    public function paidPaypal($reference, $buyerid, $beatname = null, $sellerid = null) {

        $cartsTable = TableRegistry::get('Carts');
        return $cartsTable->updateAll(
                        ['status' => 'paid'], // fields
                        ['trans_ref' => $reference, 'buyer_id' => $buyerid] // conditions
        );
    }

    /*
     * cart Data update paid
     */

    public function PaidCartAmount($reference, $userid) {

        $cartsTable = TableRegistry::get('Carts');
        return $cartsTable->updateAll(
                        ['status' => 'paid'], // fields
                        ['trans_ref' => $reference, 'buyer_id' => $userid] // conditions
        );
    }
    
    public function getUsers(){
        
        
        return $this->Users->find('all');
    
    }
    
    public function updateOrCreate($condition = [], $data = [] )
    {
        if (!empty($condition) && !empty($data)) {
            $cartsTable = TableRegistry::get('Carts');
            $return = false;
            if ($cartsTable->exists($condition)) {
                $return = $cartsTable->updateAll($data, $condition);
                $return = $cartsTable->query()->update()->set($data)->where($condition)->execute();
            } else {
                $new = $cartsTable->newEntity(array_merge($condition, $data));
                $return = $cartsTable->save($new);
            }
            return $return;
        } else {
            return false;
        }
    }

}
