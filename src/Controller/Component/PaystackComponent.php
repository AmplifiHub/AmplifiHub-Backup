<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Client;

/**
 * Paystack component
 */
class PaystackComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    private $http;

    public function __construct()
    {
        //parent::__construct($collection, $settings);
        $this->http = new Client([
      "headers" => ["authorization" => "Bearer sk_live_c76e9a8953ad69a3d7271d824389c46c38f5ac5f"]
        ]);
    }

    /**
     * verify transaction method
     * @param string|null $reference transaction reference to verify
     * @return \Cake\Http\Response|void
     */
    public function verifytransaction($reference = null)
    {
    
        $curl = curl_init();
                if(!$reference)
                {
                  die('No reference supplied');
                }
                curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_live_c76e9a8953ad69a3d7271d824389c46c38f5ac5f",
                "cache-control: no-cache"
                ],
                ));
                
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                if($err){
                // there was an error contacting the Paystack API
                  die('Curl returned error: ' . $err);
                }
                
                 return $tranx = json_decode($response,true);
                
            
                 //return json_decode($response->body, true);
    }

    /** create plan method
     *   @param array $data array containing plan detail; plan name, amount in kobo and interval
     *   @return \Cake\Http\Response|void
     */
    public function createplan($data = null) {
        $response = $this->http->post('https://api.paystack.co/plan', json_encode($data), [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }

    /**
     * editplan method
     * @param string|null $plancode to update
     * @var array $data array to update e.g plan name or amount or both
     * @return \Cake\Http\Response|void
     */
    public function editplan($plancode = null, $data) {
        $response = $this->http->post('https://api.paystack.co/plan' . $Plancode, json_encode($data), [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }

    /**
     * Fetch Subscription
     * @param string|null $subscriptionCode to update
     * @var array $data array to update e.g plan name or amount or both
     * @return \Cake\Http\Response|void
     */
    public function fetchSubscription($subscriptionCode = null) {
        $response = $this->http->get('https://api.paystack.co/subscription/' . $subscriptionCode, [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }

    /**
     * Fetch Subscription
     * @param string|null $data to update
     * @var array $data array to update e.g plan name or amount or both
     * @return \Cake\Http\Response|void
     */
    public function cancelSubscription($data) {
        $response = $this->http->post('https://api.paystack.co/subscription/disable', json_encode($data), [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }
    
    /**
     * Fetch Subscriptions
     * @param string|null $subscriptionCode to update
     * @var array $data array to update e.g plan name or amount or both
     * @return \Cake\Http\Response|void
     */
    public function fetchSubscriptions($options = []) {
        $response = $this->http->get('https://api.paystack.co/subscription', $options, [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }
    
    /**
     * Fetch Customer
     * @param string|null $subscriptionCode to update
     * @var array $data array to update e.g plan name or amount or both
     * @return \Cake\Http\Response|void
     */
    public function fetchCustomer($email = null) {
        $response = $this->http->get('https://api.paystack.co/customer/'.$email, [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }
    
    /**
     * Fetch Customer
     * @param string|null $subscriptionCode to update
     * @var array $data array to update e.g plan name or amount or both
     * @return \Cake\Http\Response|void
     */
    public function fetchPlan($plan = null) {
        $response = $this->http->get('https://api.paystack.co/customer/'.$plan, [
            'type' => 'json'
        ]);
        return json_decode($response->body, true);
    }

}
