<?= $this->extend('auth/template/template'); ?>

<?= $this->section('content') ;?>

<div class="container position-absolute top-50 start-50 translate-middle">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card overflow-hidden border-0 shadow-lg">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="title text-gray-900 fw-bold mb-3">SGCommunity</h1>
                                    <h1 class="subtitle text-gray-900 fw-light">Welcome!</h1>
                                    <img src="<?= base_url('../img/logoSGC.png') ?>" alt="Logo SGC" class="logo">
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form class="user" action="<?= url_to('login') ?>" method="post">
                                <?= csrf_field() ?>

                                <?php if ($config->validFields === ['email']): ?>
                                    <!-- Username/Email -->
                                    <div class="input-group border-0 mb-3">
                                        <span class="input-group-text border-0" id="icon"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-control form-control-user border-0 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            aria-describedby="emailHelp"
                                            name="login" placeholder="<?=lang('Auth.email')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                    </div>
                                    <?php else: ?>
                                        <div class="input-group border-0 mb-3">
                                            <span class="input-group-text border-0" id="icon"><i class="fa-solid fa-user"></i></span>
                                            <input type="text" class="form-control form-control-user border-0 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Password -->
                                    <div class="input-group border-0 mb-3">
                                        <span class="input-group-text border-0" id="icon"><i class="fa-solid fa-lock"></i></span>
                                        <input type="password" name="password" id="password" class="form-control border-0 form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                                        <span class="input-group-text border-0" id="icon" onclick="togglePassword()"><i class="fa-solid fa-eye-slash" id="eyes"></i></span>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                    <?php if ($config->allowRemembering): ?>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <?=lang('Auth.rememberMe')?>
                                            </label>
                                        </div>
                                    <?php endif; ?>

                                    <div class="btn-login d-flex justify-content-center mt-4 mb-4">
                                        <button type="submit" class="btn btn-primary btn-user btn-block" id="btn-submit"><?=lang('Auth.loginAction')?></button>
                                    </div>
                                    
                                </form>
                                <hr>
                                <div class="text-center">
                                <?php if ($config->allowRegistration) : ?>
                                    <p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                                <?php endif; ?>
                                </div>
                                <div class="text-center">
                                <?php if ($config->activeResetter): ?>
                                    <p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                                <?php endif; ?>
                                </div>
                                <p class="text-center">
                                    Made by Kelompok 3
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ;?>