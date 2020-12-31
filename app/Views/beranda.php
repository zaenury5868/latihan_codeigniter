<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron text-center">
    <h1>Portal Informasi Siswa</h1>
    <p>Selamat datang di Portal Informasi Siswa SMA 404</p>
    <a class="btn btn-dark" href="<?= base_url('info-kegiatan')?>" role="button">Info Kegiatan</a>
    <a class="btn btn-primary" href="<?= base_url('data-siswa')?>" role="button">Data Siswa</a>
</div>
<?= $this->endSection(); ?>