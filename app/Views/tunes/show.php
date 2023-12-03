
<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

    <div class="pageTop">
        <h3 id=:"greeting">Ray's Muztash</h3>

        <div class="alphaShift"> Scroll or Jump: &nbsp A &nbsp B &nbsp C &nbsp D &nbsp E &nbsp  F &nbsp G &nbsp H &nbsp I &nbsp
            J &nbsp K &nbsp L &nbsp M &nbsp N &nbsp O &nbsp P &nbsp Q &nbsp R &nbsp S &nbsp T &nbsp U &nbsp
            V &nbsp W &nbsp X &nbsp Y &nbsp Z &nbsp
        </div>

        <div id="pageTopBtns">
            <button id="tuneFilts" type="button">Filters</button>
            <button id="logout" type="button" onclick= "logout()">Logout</button>
        </div>
    </div>

    <?php foreach ($tunes as $tune) { $tid = $tune['tuneID'];  ?>

        <div class="tuneTop">
            <div class="tuneTitleBtn"      id="<?= 'titBtn' . $tid ?>"  onclick="editTitle($tid)"> <?= $tune['title'] ?> </div>

            <div class="tuneSheetBtn btn"  id="<?= 'shtBtn' . $tid ?>"  onclick="toggleTunesheetDd( <?= $tid ?>)">Tunesheet</div>
            <div class="tuneTagsBtn  btn"  id="<?= 'tagBtn' . $tid ?>"  onclick="toggleTagsDd(<?= $tid ?>)">Tags</div>
            <div class="tuneLinksBtn btn"  id="<?= 'lnkBtn' . $tid ?>"  onclick="toggleLinksDd(<?= $tid ?>)">Links</div>
            <!--div class="tunePlayBtn  btn"  id="<?= 'plaBtn' . $tid ?>"  onclick="togglePlayDd(<?= $tid ?>)">Play</div-->
        </div>

        <div id="<?= 'ts' . $tid ?>" class= "tuneSheetDd ">
            <div class='rightControls'>
                <!--<div class="saveBtn btn">SAVE</div> -->
            </div>
            <textarea id= "<?= 'ta' . $tid ?>" rows="30" cols="150"> <?= $tune['tuneSheet']?> </textarea>
        </div>
        <style>
            body {font-size:x-large;}

            <?= '#ta' . $tid ?> {
                font-size:inherit;
                background-color:#121;
                color:#999;
                width:100%;
                padding-top:1em;
            }
        </style>

            <div class= "tuneTagsDd" id="<?= 'tg' . $tid ?>" style="display:none">  </div>

            <div class= "tuneLinksDd"  id="<?= 'tg' . $tid ?>" style="display:none"> </div>


        <?php } ?> // end foreach{}

        <script> function logout() { location.href = "http://mz.localhost/Login/delete"; } </script>

        <script>

            function editTitle(tuneID) {

            }

            function toggleTunesheetDd(tuneId) {
                var tsId = 'ts' + tuneId;
                var elmt = document.getElementById(tsId);
                if (elmt.style.display==="none") { elmt.style.display="block"; }
                else { elmt.style.display="none"; }
            }
        </script>

    <style>
    body {background-color:#222; color:#aaa}

    .pageTop {display:grid; grid-template-columns: 2fr 7fr 1fr 2fr; font-size:large; align-items:center; grid-column-gap:1em;}
        #greeting { background-color:#555;}
        .alphaShift {}

        #PageTopBtns  {height:4em; background-color:#555; display:grid; grid-template-columns: 1fr 1fr; grid-column-gap:4em;}
            #tuneFilts {font-weight:bold;}
            #logout  {font-weight:bold; margin-right:1em;}

        .tuneTop {
            display:grid; grid-template-columns: 7fr 1fr 1fr 1fr;
            line-height:125%;
            font-size:18px;
            padding-left:5px;
            padding-bottom:1px;
            height:25px;
            text-align:center; border: 1px solid #888;
        }

        .tuneTop:hover {background-color:#030; color:#ddd;}
        .tuneTitleBtn {text-align:left; }
        .tuneSheetBtn {}
        .tuneTagsBtn {}
        .tuneLinksBtn {}
        .btn {cursor:pointer;}


    </style>


<?= $this->endSection();     //onclick="<?php return redirect()->to('/')->with('info', 'Logout successful ?>
