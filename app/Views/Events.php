<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 style="margin-top: 10px;">Events</h2>
    <div class="row">
        <div class="col">
            <div class="card mentok" style="width: 18rem;">
                <img src="https://www.uph.edu/wp-content/uploads/2019/10/20191010-Siswa-SMA-dan-SMK-Unjuk-Kebolehan-di-Falcon-Project-9.jpg?x58744" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Falcon Project</h4>
                    <p class="card-text">Annual event held by School of Information Science and Technology UPH.</p>
                    <a href="https://www.instagram.com/falconprojectuph/" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mentok" style="width: 18rem;">
                <img src="https://i.imgur.com/9uS9LYE.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>i-Trip 2019</h4>
                    <p class="card-text">Annual Bonding Trip held by School of Information Science and Technology UPH.</p>
                    <a href="https://www.instagram.com/p/CDoG9XlHSRC/" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mentok" style="width: 18rem;">
                <img src="https://i.imgur.com/VvjLR0k.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>BBQ Night 2019</h4>
                    <p class="card-text">Annual Barbecue Night held by School of Information Science and Technology UPH.</p>
                    <a href="https://www.instagram.com/p/CDoFKynn-1c/" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>