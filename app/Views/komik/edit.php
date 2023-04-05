<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <div class="card">
                <div class="card-header h2 d-flex justify-content-between">
                    Form Ubah Data Komik
                    <a href="/komik" class="btn btn-warning">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/komik/update/<?= $komik['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="slug" value="<?= $komik['slug'] ?>">
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" name="judul" id="judul" value="<?= $komik['judul'] ?>" autocomplete="off">
                                <div class="form-text text-danger"><?= isset($validation) ? $validation->getError('judul') : ''; ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penulis" class="col-sm-2 col-form-label col-form-label-sm">Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" name="penulis" id="penulis" value="<?= $komik['penulis'] ?>" autocomplete="off">
                                <div class="form-text text-danger"><?= isset($validation) ? $validation->getError('penulis') : ''; ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penerbit" class="col-sm-2 col-form-label col-form-label-sm">Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" name="penerbit" id="penerbit" value="<?= $komik['penerbit'] ?>" autocomplete="off">
                                <div class="form-text text-danger"><?= isset($validation) ? $validation->getError('penerbit') : ''; ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sampul" class="col-sm-2 col-form-label col-form-label-sm">Sampul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" name="sampul" id="sampul" value="<?= $komik['sampul'] ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>