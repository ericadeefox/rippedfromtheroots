<?= $this->Form->create($user, [
    'templates' => [
        'file' => '<input type="file" name="{{name}}" class="form-control" {{attrs}} />',
        'select' => '<select class="form-control dates" name="{{name}}">{{content}}</select>'
    ],
    'type' => 'file'
]) ?>
<h1 class="page_title">
    <?= $titleForLayout ?>
</h1>
<fieldset>
    <div class="col-lg-4">
        <?= $this->Form->control('email', ['class' => 'form-control']) ?>
    </div>
    <div class="col-lg-4">
        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
    </div>
    <div class="col-lg-4">
        <label for="photo">
            Photo
        </label>
        <?= $this->Form->file('photo', ['class' => 'form-control']) ?>
    </div>
    <div class="col-lg-4">
        <?= $this->Form->control('instrument', ['class' => 'form-control']) ?>
    </div>
    <div class="col-lg-4">
        <?= $this->Form->control('password', ['class' => 'form-control']) ?>
    </div>
</fieldset>
<div class="col-lg-6">
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-secondary btn-md']) ?>
</div>
<?= $this->Form->end() ?>