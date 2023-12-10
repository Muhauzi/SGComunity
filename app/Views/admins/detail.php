<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . $user->user_image); ?>"
                            class="img-fluid rounded-start mt-md-5 " alt="<?= $user->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?= $user->username; ?>
                                </li>
                                <?php if ($user->fullname): ?>
                                    <li class="list-group-item">
                                        <?= $user->fullname; ?>
                                    </li>
                                <?php endif; ?>
                                <li class="list-group-item">
                                    <?= $user->email; ?>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ?>">
                                        <?= $user->name; ?>
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <small><a href="<?= base_url('admin'); ?>">&laquo Back to user list</a></small>
                                </li>
                                <li class="list-group-item">
                                    <small><a href="<?= base_url('admin/ubahAkses'); ?>">Ubah Akses</a></small>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>