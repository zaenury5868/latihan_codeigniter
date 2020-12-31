<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'admin') : ?>
<h3>Input Data Siswa</h3>
<form action="<?= base_url('data-siswa/update/'. $siswa['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group row">
        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" value="<?= $siswa['name'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-4">
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
<?php else : ?>
<div class="alert alert-danger" role="alert">
    Anda tidak memiliki akses untuk melihat data
</div>
<?php endif; ?>
<?= $this->endSection(); ?>