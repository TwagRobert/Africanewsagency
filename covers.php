<?php
    $sele = $con->query("SELECT * FROM `coversimages` ORDER BY id DESC LIMIT 0,10");
    while($sel = $sele->fetch()){?>
        <img src="covers/<?=$sel['cover_name']?>">
<?php } ?>