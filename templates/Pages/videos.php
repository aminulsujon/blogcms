

<style>
    .pbottom--20{padding-bottom:20px}
    .post--item.post--layout-2 .post--info {
    margin-top: 7px;
    height: 69px;
    overflow: hidden;
}
</style>
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row" style="transform: none;">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7">
                <div class="page--title ptop--30 pbottom--20">
                    <h1 class="h2"><span>ভিডিও গ্যালারি</span></h1>
                </div>
                <?php
                //pr($videos);die();
                if(!empty($videos)){
                    $videos = json_decode($videos,true);
                    //pr($videos);die();
                    ?>
                    <div class="post--items post--items-4">
                        <ul class="nav row"">
                            <li class="col-md-12">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--type-video post--title-large">
                                    <div class="post--img">
                                        <div class="" id="play-frame">
                                            <?php 
                                            if(!empty($video->id)){
                                                echo $video->embedlink;
                                                echo "<h2>".$video->title."</h2>";
                                            }else{
                                                echo $videos[0]['embedlink'];
                                                echo "<h2>".$video[0]['title']."</h2>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Divider Start -->
                                <hr class="divider hidden-md hidden-lg">
                                <!-- Divider End -->
                            </li>

                            <li class="col-md-12">
                                <div class="row">
                                    <?php
                                    $i=1;
                                    //array_shift($videos);
                                    foreach($videos as $video){ //pr($video);die();
                                        $videoLink = explode('src="',$video['embedlink']);
                                        $videoLink = explode('" title',$videoLink[1]);
                                        $videoLink_embed = $videoLink[0];
                                        $videoLink_sp = explode('/',$videoLink_embed);
                                        $videoLink_id = $videoLink_sp[4];
                                        // pr($videoLink);die();
                                        ?>
                                        <div class="col-md-4" style="margin-top:20px">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--type-audio post--layout-2">
                                                <div class="post--img">
                                                    <a style="background:url('https://img.youtube.com/vi/<?= $videoLink_id ?>/hqdefault.jpg') 0 0/100%;width:100%;height:170px"
                                                       href="<?= $siteoptions['web_url']?>/video/<?= $video['id'] ?>"
                                                       class="thumb">
                                                    </a>
                                                    <div class="post--info" style="padding-top:0">
                                                    
                                                        <div class="title">
                                                            <h3 class="h4">
                                                                <a href="<?= $siteoptions['web_url']?>/video/<?= $video['id'] ?>" class="btn-link"><?= $video['title'] ?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                    </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </li>
                        </ul>

                        
                    </div>
                    <?php
                }    
                ?>

            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <!-- Widget Start -->
                    <div class="widget"><?= $this->element('usn/latest') ?></div>
                    <!-- Widget End -->
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 3370px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
            </div>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>
