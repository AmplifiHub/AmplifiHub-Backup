<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $accounts
 */
?>

<?php foreach ($accounts as $account): ?>

    <p>
        <?= h($account->bank_name) ?>
    </p>
<p>
        <?= h($account->bank_code) ?>
    </p>
    <p>
        <?= h($account->account_name) ?>
    </p>
    

    <p>
        <?= h($account->account_number) ?>
    </p>

    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id], ['class' => 'btn btn-default', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['class' => 'btn btn-danger', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);", 'confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>

<?php endforeach; ?>


