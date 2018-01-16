<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="article">
    <h3><?= $article->title ?></h3>
    <h6><?= date('F jS, Y', strtotime($article->date)) ?></h6>
    <?= $article->body ?>
</div>
<a href="#" onclick="goBack()">< go back</a>
<script>
    function goBack() {
        window.history.back();
    }
</script>