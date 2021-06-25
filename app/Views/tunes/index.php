<?php //dd($tunes); ?>

<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

    <h1>Tunes</h1>

    <ul>
        <?php foreach($tunes as $tune): ?>
            <li>
                <?= $tune['tuneID'] ?>
                <?= $tune['memID'] ?>
                <?= $tune['title'] ?>
                <?= $tune['tuneSheet'] ?>
            </li>
        <?php endforeach ?>
    </ul>

<?= $this->endSection(); ?>
