<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success alert alert-info" style="background-color:#00c0ef !important;" onclick="this.classList.add('hidden')"><?= $message ?></div>
