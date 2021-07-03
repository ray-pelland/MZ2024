

<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

    <div class="pageTop">
        <h3 id=:"greeting">Ray's Muztash</h3>

        <div class="alphaShift"> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z </div>

        <button id="logout" type="button" style=""  onclick= "logout()">Logout</button>

        <button id=="tuneFilts" type="button">Filters</button>
    </div>
    <hr>
    <?php foreach ($tunes as $tune): ?>
        <div class="tuneTop">
            <div id="tuneTitleBtn"><?= $tune['title'] ?></div>
            <div></div>
            <div id="tuneSheetBtn">Lyrics</div>
            <div></div>
            <div id="tuneTagsBtn">Tags</div>
            <div></div>
            <div id="TuneLinksBtn">Links</div>
        </div>
    <?php endforeach; ?>

    <textarea cols="150"><?=$tune['tuneSheet']?></textarea>

    <script> function logout() { location.href = "http://mz.localhost/Login/delete"; } </script>

<style>
    .tuneTop { display:grid; grid-template-columns: 6fr 1fr 1fr 1fr 1fr 1fr 1fr; font-size:medium;}
    #tuneTitleBtn {}
    #tuneSheetBtn {;}
    #tuneTagsBtn {; }
    #tuneLinksBtn {; }

    .pageTop {display:grid; grid-template-columns: 1fr 10fr 1fr 1fr; font-size:medium; align:center;}
    #greeting {}
    .alphaShift {}
    #logout  {height:2em;}
    #tuneFilts {height:2em;}

</style>

<?= $this->endSection();     // onclick="<?php return redirect()->to('/')->with('info', 'Logout successful ?>
