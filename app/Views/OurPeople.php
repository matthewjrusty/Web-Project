<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="textbox container">
    <div class="row">
        <div class="col">
            <h1 class="headermain">Our People</h1><br>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dosen as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img class="fotodosen" src="/img/<?= $d['foto']; ?>" alt=""></td>
                            <td><?= $d['Name']; ?></td>
                            <td><?= $d['Title']; ?></td>
                            <td><a class="btn btn-success" href="/OurPeople/<?= $d['slug']; ?>">Profile</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>