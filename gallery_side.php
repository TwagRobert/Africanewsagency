<?php
    $sele = $con->query("SELECT * FROM `galery` ORDER BY id DESC LIMIT 0,10");
    while($sel = $sele->fetch()){?>
        <a href="image-bank"><img src="gallery/<?=$sel['image_name']?>"></a>
<?php } ?>