<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>Home<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

    <h1>Welcome to Muztash</h1>

    <?php if (current_user()): ?>

        <p>User is logged in</p>

        <p>Hello  <?= esc(current_user()->name) ?></p>

        <a href="<?= site_url('/logout') ?>">Log out</a>

    <?php else: ?>

        <p>You are not logged in. There is no current session. </p>

        <a href="<?= site_url("/login"); ?>">Log in to open a new Muztash session.</a>

    <?php endif; ?>

    <a href="<?= site_url("/signup/new"); ?>"><br><br>Sign up to create a new Muztash account.</a>

<?= $this->endSection(); ?>
