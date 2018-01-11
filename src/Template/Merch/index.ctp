<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Merch[]|\Cake\Collection\CollectionInterface $merch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Merch'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="merch index large-9 medium-8 columns content">
    <h3><?= __('Merch') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($merch as $merch): ?>
            <tr>
                <td><?= $this->Number->format($merch->id) ?></td>
                <td><?= $merch->has('photo') ? $this->Html->link($merch->photo->id, ['controller' => 'Photos', 'action' => 'view', $merch->photo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $merch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $merch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $merch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
