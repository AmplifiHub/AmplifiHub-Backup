<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Withdrawal $withdrawal
 */
?>

<div class="col-md-6  table-responsive">
  <?= $this->Html->link(__('Edit Withdrawal'), ['action' => 'edit', $withdrawal->id], ['class'=>'btn btn-success','confirm' => __('Are you sure you want to approve # {0}?', $withdrawal->id)]) ?>

  <?= $this->Form->postLink(__('Delete Withdrawal'), ['action' => 'delete', $withdrawal->id], ['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $withdrawal->id)]) ?>
<div class="withdrawals view large-9 medium-8 columns content">
    <table class="vertical-table table table-striped">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $withdrawal->has('user') ? $this->Html->link($withdrawal->user->fullname, ['controller' => 'Users', 'action' => 'view', $withdrawal->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td>&#8358;<?= h(number_format($withdrawal->amount)) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Withdrawal Id') ?></th>
            <td>#<?= $this->Number->format($withdrawal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($withdrawal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($withdrawal->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Name') ?></th>
            <td style="text-transform:uppercase"><?php foreach($withdrawal->user->accounts as $account){
                echo $account['bank_name'].'<br>'. $account['account_name'].'<br>'. $account['account_number'].'<br><div class="mt-3 col-md-12 storeline"></div>';
            } ?>
          </td>
        </tr>

    </table>
</div>
</div>
