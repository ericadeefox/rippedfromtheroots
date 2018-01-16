<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Merch $merch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $merch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $merch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Merch'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="merch form large-9 medium-8 columns content">
    <?= $this->Form->create($merch) ?>
    <fieldset>
        <legend><?= __('Edit Merch') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('description');
            echo $this->Form->control('photo_id', ['options' => $photos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
