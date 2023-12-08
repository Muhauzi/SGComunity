<?= $this->extend('../templates/index') ;?>

<?= $this->section('content') ?>

<h2>Register</h2>

<?= view('Myth\Auth\Views\_message_block') ?>

<form action="<?= route_to('register') ?>" method="post">
    <?= csrf_field() ?>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="pass_confirm">Password Confirm</label>
    <input type="password" name="pass_confirm" required>

    <button type="submit">Register</button>
</form>

<?= $this->endSection() ?>
