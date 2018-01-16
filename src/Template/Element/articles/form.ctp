<?= $this->Form->create($article, [
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
        <div class="col-lg-6">
            <?= $this->Form->control('title', [
                'class' => 'form-control',
                'label' => 'Post Title'
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label class="form-control-label">
                Date to Publish
            </label>
            <div>
                <?= $this->Form->control('date', [
                    'hour' => false,
                    'label' => false,
                    'maxYear' => date('Y', strtotime('+5 years')),
                    'meridian' => false,
                    'minute' => false,
                    'minYear' => date('Y'),
                    'value' => !empty($article->date) ? date('Y-m-d', strtotime($article->date)) : date('Y-m-d')
                ]);?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <label class="form-control-label">
                Post
            </label>
            <?= $this->CKEditor->loadJs() ?>
            <?= $this->Form->textarea('body', ['class' => 'form-control']) ?>
            <?= $this->CKEditor->replace('body') ?>
        </div>
    </div>
</fieldset>
<div class="col-lg-6 center-button">
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-secondary btn-md']) ?>
    <?= $this->Form->end() ?>
</div>
<?php if ($this->request->params['action'] == 'edit'): ?>
    <p class="float-right">
        <small>
            <?= $this->Html->link('Delete post?', ['controller' => 'Articles', 'action' => 'delete', $article->id], ['class' => 'text-danger']) ?>
        </small>
    </p>
<?php endif ?>