<?= $this->Form->create($user, [
    'templates' => [
        'file' => '<input type="file" name="{{name}}" class="form-control" {{attrs}} />',
        'select' => '<select class="form-control dates" name="{{name}}">{{content}}</select>'
    ],
    'type' => 'file'
]) ?>
    <fieldset>
        <h1 class="logo-no-sidebar">
            <?= $titleForLayout ?>
        </h1>
        <div class="row">
            <div class="col-lg-9">
                <label class="form-control-label">
                    Front-page bio
                </label>
                <?= $this->CKEditor->loadJs() ?>
                <?= $this->Form->textarea('bio', ['class' => 'form-control']) ?>
                <?= $this->CKEditor->replace('bio') ?>
            </div>
        </div>
    </fieldset>
    <div class="col-lg-6 center-button">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-secondary btn-md']) ?>
        <?= $this->Form->end() ?>
    </div>
