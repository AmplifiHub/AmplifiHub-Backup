<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<div class="genres view large-9 medium-8 columns content">
    <h3><?= h($genre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($genre->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($genre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($genre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($genre->modified) ?></td>
        </tr>
    </table>
</div>
