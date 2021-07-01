

<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

    <h2>Ray's Tune List</h2>

    <div> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z

    <button type="button" style="margin-left:100px"  onclick= "logout()">Logout</button>

    <?php foreach ($tunes as $tune): ?>
        <hr><h4><?= $tune['title'] ?></h4>
    <?php endforeach; ?>

    <script>
        function logout() { location.href = "http://mz.localhost/Login/delete"; }
    </script>


<?= $this->endSection()     // onclick="<?php return redirect()->to('/')->with('info', 'Logout successful ?>
