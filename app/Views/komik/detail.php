<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="/img/<?= $komik['sampul'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul'] ?></h5>
                            <p class="card-text">
                                <b>Penulis : </b> <?= $komik['penulis'] ?> <br>
                                <small class="text-body-secondary"><b>Penerbit : </b><?= $komik['penerbit'] ?></small>
                            </p>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/komik/delete/<?= $komik['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/komik" class="btn btn-info btn-sm">Kembali Ke Daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>