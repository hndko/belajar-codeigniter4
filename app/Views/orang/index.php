<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Daftar Orang
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Masukan Keyword Pencarian..." name="keyword">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 + (10 * ($current_page - 1)); ?>
                            <?php foreach ($orang as $o) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $o['nama'] ?></td>
                                    <td><?= $o['alamat'] ?></td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $pager->links('tb_orang', 'orang_pagination') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>