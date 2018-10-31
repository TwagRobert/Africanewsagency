<div class="widget">
                    <h1 class="widget-title">Featured Video</h1>
                    <div class="tab-content">
<?php
$alvid = $con->query("SELECT * FROM `videos_post` ORDER BY `id` DESC LIMIT 0,3");
 while($select = $alvid->fetch()){?>
                        <div class="tab-streams">
							<iframe class="img-responsive" src="<?=$select['video_name']?>"></iframe>
						<p class="meta"><?=$select['date_time']?></p>
                            <div class="clearfix"></div>
                        </div>
<?php } ?>
<h2 class="post-title-small"> <a href="video_gallery">View all</a></h2>
                    </div>
                </div>