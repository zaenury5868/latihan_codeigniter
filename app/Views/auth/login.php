<?= $this->extend('layout/template');  ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h3 class="text-center">Login</h3>
        </div>
    </div>
    <?php if(session()->getFlashdata('login_failed')) : ?>
    <div class="row">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('login_failed'); ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <form action="<?= base_url('login/proses-login')?>" method="post">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email"
                        class="form-control <?php if($validation->hasError('email')) echo 'is_invalid'?>" id="email"
                        name="email" value="<?= old('email')?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email')?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"
                        class="form-control <?php if($validation->hasError('password')) echo 'is_invalid'?>"
                        id="password" name="password" value="<?= old('password')?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password')?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>