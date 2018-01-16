<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<h1 class="logo-no-sidebar">News</h1>
<?php foreach ($articles as $article): ?>
<?php
    $preview = explode(' ', $article->body);
    $slug = strtolower($article->title);
    $slug = explode (' ', $slug);
    $slug = implode ($slug, '-');
?>
<div class="article">
    <?php if ($article->icon_id): ?>
        <?= $this->Html->image('icons/' . $article->icon['file'], [
            'alt' => $article->icon['name'],
            'class' => 'float-right'
        ]) ?>
    <?php endif ?>
    <h3>
        <?= $this->Html->link($article->title, [
            'controller' => 'Articles',
            'action' => 'view', $article->id, $slug
        ]) ?>
    </h3>
    <h6><?= date('F jS, Y', strtotime($article->date)) ?></h6>
    <?= $article->body ?>
    <h6>
        <?php if ($loggedIn): ?>
            <?= $this->Html->link('Edit this post?', [
                'controller' => 'Articles',
                'action' => 'edit', $article->id, $slug
            ]) ?>
        <?php endif ?>
    </h6>
</div>
<?php endforeach ?>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <?php
        $s = $this->Paginator->counter(['format' => __("{{current}}")]) == 1 ? '' : 's'
    ?>
    <p><?= $this->Paginator->counter(['format' => __("Page {{page}} of {{pages}}, showing {{current}} post$s")]) ?></p>
</div>
