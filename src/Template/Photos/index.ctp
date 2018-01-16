<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for ($x = 1; $x <= $count; $x++): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $x ?>" <?= $x == 1 ? 'class="active"' : '' ?>></li>
        <?php endfor ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($photos as $x => $photo): ?>
            <div class="carousel-item <?= $x == 0 ? 'active' : '' ?>">
                <img class="d-block" src="/img/<?= $photo['filename'] ?>" alt="<?= $photo['caption'] ?>">
            </div>
        <?php endforeach ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script>
    $('.carousel').carousel({
        interval: false
    })
</script>