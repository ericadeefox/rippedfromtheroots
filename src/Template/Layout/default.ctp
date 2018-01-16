<div class="container-fluid">
    <div class="row">
        <?php $this->extend('default_wrapper'); ?>
        <div id="header">
            <?= $this->element('header') ?>
        </div>
        <div id="content_wrapper" class="col-sm-12 col-lg-12">
            <div id="no-sidebar" class="clearfix content">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
</div>