<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="article">
    <?php if ($article->icon_id): ?>
        <?= $this->Html->image('icons/' . $article->icon['file'], [
            'alt' => $article->icon['name'],
            'class' => 'float-right icon'
        ]) ?>
    <?php endif ?>
    <h3><?= $article->title ?></h3>
    <h6><?= date('F jS, Y', strtotime($article->date)) ?></h6>
    <h6><em>Listening to: <?= $article->listening ?></em></h6>
    <?= $article->body ?>
</div>
<a href="#" onclick="goBack()">< go back</a>
<script>
    function goBack() {
        window.history.back();
    }
</script>