<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('home')?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data-siswa')?>">Data Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('info-kegiatan')?>">Info Kegiatan</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php if(session()->get('logged_in') === true) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?> ">Logout</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=  base_url('login')?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('registrasi')?>">Registrasi</a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
    <!-- End of Navbar -->

    <?= $this->renderSection('content') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>