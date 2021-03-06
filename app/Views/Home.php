<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/upheagle.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/falcon3.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/makrab.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/senam.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/falcon2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/falcon.jpeg" class="d-block w-100" alt="...">
        </div>
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
</section>
<?= $this->endSection(); ?>