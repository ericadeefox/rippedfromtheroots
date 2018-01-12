<div class="row">
    <div class="col-lg-8 col-xs-12">
        <?= $this->Form->create('User', ['url' => ['controller' => 'Users', 'action' => 'login']]) ?>
        <div class='form-group col-lg-8 col-xs-12'>
            <?= $this->Form->control('email', ['class' => 'form-control']) ?>
        </div>
        <div class='form-group col-lg-8 col-xs-12'>
            <?= $this->Form->control('password', ['class' => 'form-control']) ?>
        </div>
        <div class='form-group col-lg-8 col-xs-12'>
            <?= $this->Form->button(__('Login'), ['class' => 'btn btn-secondary btn-md']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
