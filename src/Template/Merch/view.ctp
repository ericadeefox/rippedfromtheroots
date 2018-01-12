<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Merch $merch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Merch'), ['action' => 'edit', $merch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merch'), ['action' => 'delete', $merch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merch'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merch'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="merch view large-9 medium-8 columns content">
    <h3><?= h($merch->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= $merch->has('photo') ? $this->Html->link($merch->photo->id, ['controller' => 'Photos', 'action' => 'view', $merch->photo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($merch->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($merch->type)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($merch->description)); ?>
    </div>
</div>
