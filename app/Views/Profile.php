<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="textbox container">
    <div class="row">
        <div class="col" style="margin: 20px;">
            <h1 class="headermain"><?= $dosen['Name'] ?></h1><br>
            <p>
                <img class="profilefoto" src="/img/<?= $dosen['foto']; ?>" alt="">
                <p>
                    <b>Education: </b><br>
                    <?= $dosen['Education']; ?><br>
                    <b>Department: </b><br>
                    <?= $dosen['Department']; ?><br><br>
                    <b>Contact: </b><br>
                    <?= $dosen['Contact']; ?><br><br>
                    <b>Disciplines: </b><br>
                    <?= $dosen['Disciplines']; ?><br><br>
                    <b>Research Interest(s): </b><br>
                    <?= $dosen['Research Interest']; ?><br><br>
                </p>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>