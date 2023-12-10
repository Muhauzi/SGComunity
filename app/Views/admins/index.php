<?= $this->extend('templates/index') ;?>
<?= $this->section('content') ;?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Table</h1>

    <?= view('Myth\Auth\Views\_message_block') ?>
    <a class="btn btn-primary mb-3" href="<?= base_url('admin/tambahUser') ?>">Daftarkan Pengguna</a>
    <div class="row">
        <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php 
                $i = 1;
                foreach ($users as $row) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ;?></th>
                        <td><?= $row->username ;?></td>
                        <td><?= $row->email ;?></td>
                        <td><?= $row->name ;?></td>
                        <td><a class="btn btn-info" href="<?= base_url('admin/' . $row->userid) ;?> ">Detail</a> | Delete </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
 
</div>
<!-- /.container-fluid -->

<?= $this->endSection() ;?>