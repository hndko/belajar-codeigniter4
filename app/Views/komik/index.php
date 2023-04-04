<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header h2 d-flex justify-content-between">
                    Daftar Komik
                    <a href="/komik/create" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('message') ?>
                        </div>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($komik as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><img src="/img/<?= $k['sampul'] ?>" alt="" class="sampul"></td>
                                    <td><?= $k['judul'] ?></td>
                                    <td>
                                        <a href="/komik/detail/<?= $k['slug'] ?>" class="btn btn-success btn-sm">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>