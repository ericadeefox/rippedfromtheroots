<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photo'), ['action' => 'edit', $photo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photo'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Albums'), ['controller' => 'Albums', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Album'), ['controller' => 'Albums', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merch'), ['controller' => 'Merch', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merch'), ['controller' => 'Merch', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shows'), ['controller' => 'Shows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Show'), ['controller' => 'Shows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photos view large-9 medium-8 columns content">
    <h3><?= h($photo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photo->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Filename') ?></h4>
        <?= $this->Text->autoParagraph(h($photo->filename)); ?>
    </div>
    <div class="row">
        <h4><?= __('Caption') ?></h4>
        <?= $this->Text->autoParagraph(h($photo->caption)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Albums') ?></h4>
        <?php if (!empty($photo->albums)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Photo Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($photo->albums as $albums): ?>
            <tr>
                <td><?= h($albums->id) ?></td>
                <td><?= h($albums->name) ?></td>
                <td><?= h($albums->photo_id) ?></td>
                <td><?= h($albums->date) ?></td>
                <td><?= h($albums->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Albums', 'action' => 'view', $albums->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Albums', 'action' => 'edit', $albums->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Albums', 'action' => 'delete', $albums->id], ['confirm' => __('Are you sure you want to delete # {0}?', $albums->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Merch') ?></h4>
        <?php if (!empty($photo->merch)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Photo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($photo->merch as $merch): ?>
            <tr>
                <td><?= h($merch->id) ?></td>
                <td><?= h($merch->type) ?></td>
                <td><?= h($merch->description) ?></td>
                <td><?= h($merch->photo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Merch', 'action' => 'view', $merch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Merch', 'action' => 'edit', $merch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Merch', 'action' => 'delete', $merch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shows') ?></h4>
        <?php if (!empty($photo->shows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Venue') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Other Bands') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Photo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($photo->shows as $shows): ?>
            <tr>
                <td><?= h($shows->id) ?></td>
                <td><?= h($shows->date) ?></td>
                <td><?= h($shows->venue) ?></td>
                <td><?= h($shows->address) ?></td>
                <td><?= h($shows->city) ?></td>
                <td><?= h($shows->state) ?></td>
                <td><?= h($shows->other_bands) ?></td>
                <td><?= h($shows->description) ?></td>
                <td><?= h($shows->photo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shows', 'action' => 'view', $shows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shows', 'action' => 'edit', $shows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shows', 'action' => 'delete', $shows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
