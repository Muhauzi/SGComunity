<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Table</h1>

    <?= view('Myth\Auth\Views\_message_block') ?>
    <div class="row">
        <div class="col-md-8">
            <form class="user" action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group">
                    <input type="email"
                        class="form-control form-control-user <?php if (session('errors.email')): ?>is-invalid<?php endif ?>"
                        name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>"
                        value="<?= old('email') ?>">
                </div>

                <div class="form-group">
                    <input type="text"
                        class="form-control form-control-user <?php if (session('errors.username')): ?>is-invalid<?php endif ?>"
                        name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>

                <!-- New input for user group -->
                <div class="form-group">
                    <label for="user_group">User Group</label>
                    <select class="form-control" id="user_group" name="user_group">
                        <option value="1">Admin</option>
                        <option value="2">Regular</option>
                        <option value="3">Penjual</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" name="password"
                            class="form-control form-control-user <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                            placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="pass_confirm"
                            class="form-control form-control-user <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                            placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <?= lang('Auth.register') ?>
                </button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>