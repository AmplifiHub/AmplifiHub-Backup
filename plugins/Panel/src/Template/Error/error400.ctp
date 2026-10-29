<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

    $this->start('file');
?>
<?php

    $this->end();
endif;
?>

<img src="https://amplifihub.s3.us-east-2.amazonaws.com/ErrorFolder/error-404.png" />
