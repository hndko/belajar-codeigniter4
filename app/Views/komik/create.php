<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <div class="card">
                <div class="card-header h2 d-flex justify-content-between">
                    Form Tambah Data Komik
                    <a href="/komik" class="btn btn-warning">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/komik/store" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm <?= validation_errors('judul') ? 'is-invalid' : '' ?>" name="judul" id="judul" autocomplete="off">
                                <!-- <div class="form-text text-danger"><?= isset($validation) ? $validation->getError('judul') : ''; ?></div> -->
                                <div class="form-text text-danger"><?= validation_show_error('judul') ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penulis" class="col-sm-2 col-form-label col-form-label-sm">Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm <?= validation_errors('penulis') ? 'is-invalid' : '' ?>" name="penulis" id="penulis" autocomplete="off">
                                <div class="form-text text-danger"><?= validation_show_error('penulis') ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penerbit" class="col-sm-2 col-form-label col-form-label-sm">Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm <?= validation_errors('penerbit') ? 'is-invalid' : '' ?>" name="penerbit" id="penerbit" autocomplete="off">
                                <div class="form-text text-danger"><?= validation_show_error('penerbit') ?></div>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="sampul" class="col-sm-2 col-form-label col-form-label-sm">Sampul</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm <?= validation_errors('sampul') ? 'is-invalid' : '' ?>" name="sampul" id="sampul" type="file">
                                <div class="form-text text-danger"><?= validation_show_error('sampul') ?></div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>