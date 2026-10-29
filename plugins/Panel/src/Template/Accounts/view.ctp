<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $account->has('user') ? $this->Html->link($account->user->fullname, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Name') ?></th>
            <td><?= h($account->bank_name) ?></td>
        </tr>
        
         <tr>
            <th scope="row"><?= __('Bank Code') ?></th>
            <td><?= h($account->bank_code) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Account Number') ?></th>
            <td><?= h($account->account_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($account->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
    </table>
</div>
