<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 *
 * @method \App\Model\Entity\Cart[] paginate($object = null, array $settings = [])
 */
class PaypalController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paypal');
        $this->loadComponent('Common');
    }

    public function verifyIpn() {
        $this->autoRender = false;
        $verified = $this->Paypal->verifyIPN();

        if ($verified) {
            $this->loadModel('Payments');
            $this->loadModel('Carts');
            $this->Payments->addPayment($_POST);
            $buyerId = !empty($_POST['custom']) ? (int) $_POST['custom'] : 0;
            $reference = !empty($_POST['item_number']) ? $_POST['item_number'] : 0;
            $paid = $this->Carts->PaidCartAmount($reference, $buyerId);
            if ($paid) {
                $this->loadModel('Stores');
                $beatseller = $this->Carts->find()->select()->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $buyerId])->contain(['Stores'])->first();
                $bseller = $beatseller->store->user_id;

                $query = $this->Carts->find()->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $buyerId]);
                $query->select(['sum' => $query->func()->sum('amount')]);
                $amount = $query->first();


                $this->loadModel('Bankbalances');
                $check = $this->Bankbalances->find()->where(['user_id' => $bseller]);
                if ($check->isEmpty()):
                    $baldata['user_id'] = $bseller;
                    $baldata['balance'] = $amount['sum'];
                    $bank = $this->Bankbalances->newEntity();
                    $balsave = $this->Bankbalances->patchEntity($bank, $baldata);
                    $this->Bankbalances->save($balsave);
                else:
                    $bankbal = $check->first();
                    $baldata = [];
                    $baldata['user_id'] = $bseller;
                    $baldata['balance'] = $amount['sum'] + $bankbal->balance;
                    $balsave = $this->Bankbalances->patchEntity($bankbal, $baldata);
                    $this->Bankbalances->save($balsave);
                endif;
            }

            $beatsellers = $this->Carts->find()
                    ->select(['Stores.user_id'])
                    ->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $buyerId])
                    ->contain(['Stores.Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']], 'Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']]])
                    ->hydrate(false)
                    ->toArray();
            foreach ($beatsellers as $beatseller) {
                $buyerName = !empty($beatseller['Users']['firstname']) ? $beatseller['Users']['firstname'] . ' ' . $beatseller['Users']['lastname'] : $beatseller['Users']['fullname'];
                $sellerName = !empty($beatseller['Stores']['user']['firstname']) ? $beatseller['Stores']['user']['firstname'] . ' ' . $beatseller['Stores']['user']['lastname'] : $beatseller['Stores']['user']['fullname'];
                $buyerEmail = !empty($beatseller['Users']['email']) ? $beatseller['Users']['email'] : '';
                $sellerEmail = !empty($beatseller['Stores']['user']['email']) ? $beatseller['Stores']['user']['email'] : '';

                if (!empty($buyerEmail)) {
                    $this->Common->sendBeatsBuyersEmail($buyerEmail, $buyerName, $sellerName);
                }
                if (!empty($sellerEmail)) {
                    $this->Common->sendBeatsSellersEmail($sellerEmail, $buyerName, $sellerName);
                }
            }
        }
        // Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
        header("HTTP/1.1 200 OK");
    }

}
