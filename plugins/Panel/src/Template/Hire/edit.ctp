<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="mmrequesters form large-9 medium-8 columns content">
    <?= $this->Form->create($mmrequester) ?>
    <fieldset>
        <legend><?= __('Edit Mmrequester') ?></legend>
        <?php
            if($user['role']==='admin'){echo $this->Form->control('user_id', ['options' => $users]);}
            echo $this->Form->control('artist_band_name');
            echo $this->Form->control('project_name');
            echo $this->Form->control('song_description');
            echo $this->Form->control('service_request');
            echo $this->Form->control('download_link');
            echo $this->Form->control('deadline');
            $user = $this->request->session()->read('Auth.User');
            if($user['role']==='admin'){echo $this->Form->control('status');}
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
