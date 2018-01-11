<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Show $show
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Show'), ['action' => 'edit', $show->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Show'), ['action' => 'delete', $show->id], ['confirm' => __('Are you sure you want to delete # {0}?', $show->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Show'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shows view large-9 medium-8 columns content">
    <h3><?= h($show->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= $show->has('photo') ? $this->Html->link($show->photo->id, ['controller' => 'Photos', 'action' => 'view', $show->photo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($show->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($show->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Venue') ?></h4>
        <?= $this->Text->autoParagraph(h($show->venue)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($show->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('City') ?></h4>
        <?= $this->Text->autoParagraph(h($show->city)); ?>
    </div>
    <div class="row">
        <h4><?= __('State') ?></h4>
        <?= $this->Text->autoParagraph(h($show->state)); ?>
    </div>
    <div class="row">
        <h4><?= __('Other Bands') ?></h4>
        <?= $this->Text->autoParagraph(h($show->other_bands)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($show->description)); ?>
    </div>
</div>
