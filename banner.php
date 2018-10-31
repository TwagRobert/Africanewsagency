
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="events_space">
                    <div class="slider">
                <?php
                    $selector = $con->query('SELECT * FROM `banners`');
                    $today = date("Y-m-d");
                    while($select = $selector->fetch()){
                    
                    if($select['end_time'] == $today) {
                        $de = $con->query("DELETE FROM `banners` WHERE `end_time` = $today");
                    }   
                    ?>
                    <img src="banniere/<?=$select['banner_image']?>"/>
                    <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
