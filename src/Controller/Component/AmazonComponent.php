<?php

 namespace App\Controller\Component;
 require dirname(__DIR__) . '/aws/aws-autoloader.php';
 use Cake\Controller\Component;
 use Aws\S3\S3Client;

 class AmazonComponent extends Component{
    public $config = null;
    public $s3 = null;

    public function initialize(array $config){
        parent::initialize($config);
        $this->config = [
           's3' => [
               'key' => 'AKIAJ7MQKBIMBL7OMKBQ',
               'secret' => '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',
               'bucket' => 'amplifiHub',
           ]
        ];
        $this->s3 = S3Client::factory([
            'credentials' => [
               'key' => $this->config['s3']['key'],
               'secret' => $this->config['s3']['secret']
            ],
        'region' => 'us-east-1',
        'version' => '2006-03-01'
        ]);
    }
    function test(){
        $var = 'hello';
        return $var;
    }
}
?>