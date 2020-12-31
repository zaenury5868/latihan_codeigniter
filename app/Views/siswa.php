<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if(session()->get('role') === 'admin') : ?>
<h3>Data Siswa</h3>
<a href="<?= base_url('data-siswa/tambah')?>" class="btn btn-sm btn-primary mb-2">Tambah Data Siswa</a>
<table class="table-bordered table-striped">
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($siswa as $s) : ?>
    <tr>
        <td><?= $s['name'] ?></td>
        <td><?= $s['nis'] ?></td>
        <td><?= $s['tgl_lahir'] ?></td>
        <td>
            <a href="<?= base_url('data-siswa/edit/' . $s['id']) ?>" class=" btn btn-warning">Edit</a>
            <form action="<?= base_url('data-siswa/delete/' . $s['id']) ?>" method="POST" class="d-inline">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="confirm('Apakah anda yakin?')">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else : ?>
<div class="alert alert-danger" role="alert">
    Anda tidak memiliki akses untuk melihat data
</div>
<?php endif; ?>
<?= $this->endSection(); ?>