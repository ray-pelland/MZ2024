

<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

    <h2>Ray's Tune List</h2>

    <div> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z </div>

        <?php foreach ($tunes as $tune): ?>
            <hr><h4><?= $tune['title'] ?></h4>
            <!-- <?= $tune['tuneSheet'] ?> -->
        <?php endforeach; ?>

<?= $this->endSection() ?>
