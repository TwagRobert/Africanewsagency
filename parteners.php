<div class="widget">
    <div class="tab-content">
        <div class="slider">
        <?php
        $sele = $con->query("SELECT * FROM `partners`");
        while($sel = $sele->fetch()){?>
            <a href="<?=$sel['partner_name']?>" target="_blank"><img src="partners/<?=$sel['partrner_logo']?>"></a>
        <?php } ?>
        </div>
        <h2 class="post-title-small"> <a>OUR PARTNERS</a></h2></div>
</div>