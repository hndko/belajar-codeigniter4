<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Contact Us</h1>
    <?php foreach ($alamat as $row) : ?>
        <ul>
            <li><?= $row['tipe'] ?></li>
            <li><?= $row['alamat'] ?></li>
            <li><?= $row['kota'] ?></li>
        </ul>
    <?php endforeach ?>
</div>
<?= $this->endSection(); ?>