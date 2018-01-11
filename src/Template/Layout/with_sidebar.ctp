<?php $this->extend('default_wrapper') ?>
<?= $this->Html->link('Erica Dee Fox',
    ['controller' => 'Pages', 'action' => 'home'],
    [
        'class'=>'accent-font logo-with-sidebar'
    ]);
?>
<div id="content_wrapper" class="col-sm-12 col-lg-9">
    <div id="content" class="clearfix">
        <?= $this->fetch('content') ?>
    </div>
</div>
<?= $this->element('sidebar') ?>
