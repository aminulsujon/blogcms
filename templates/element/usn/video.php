<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Video Main Content Start -->
        <div class="main--content pd--30-0">
            <!-- Post Items Title Start -->
            
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">
                    <a class="font-weight-bold" href="https://www.news24bd.net/video">ভিডিও গ্যালারি</a>    </h2>
                        <div class="nav">
                    
                    </div>
                        
            </div>
            <?php
            if(!empty($videos)){
                $videos = json_decode($videos,true);
                //pr($videos);die();
                ?>
            <!-- Post Items Start -->
            <div class="post--items post--items-4">
                <ul class="nav row"">
                    <li class="col-md-8">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--type-video post--title-large">
                            <div class="post--img">
                                <div class="" id="play-frame">
                                    <?= $videos[0]['embedlink']?>
                                </div>
                            </div>
                        </div>

                        <!-- Divider Start -->
                        <hr class="divider hidden-md hidden-lg">
                        <!-- Divider End -->
                    </li>

                    <li class="col-md-4">
                        <ul class="nav">
                            <?php
                            $i=1;
                            //array_shift($videos);
                            foreach($videos as $video){
                                $videoLink = explode('src="',$video['embedlink']);
                                $videoLink = explode('" title',$videoLink[1]);
                                $videoLink_embed = $videoLink[0];
                                $videoLink_sp = explode('/',$videoLink_embed);
                                $videoLink_id = $videoLink_sp[4];
                                // pr($videoLink);die();
                                ?>
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--type-audio post--layout-3">
                                        <div class="post--img">
                                            <a style="background:url('https://img.youtube.com/vi/<?= $videoLink_id ?>/1.jpg') 0 0/100%;width:100px;height:80px" onclick="playYoutubeVideo('<?= $videoLink_embed ?>');" href="javascript:void(0);" class="thumb">
                                                
                                               
                                            </a>
                                            <div class="post--info" style="padding-top:0">
                                                <div class="title">
                                                    <h3 class="h4"><a onclick="playYoutubeVideo('<?= $videoLink_embed ?>');" href="javascript:void(0);" class="btn-link"><?= $video['title'] ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <?php
                                $i++;
                            }
                            ?>
                        </ul>
                    </li>
                </ul>

                
            </div>
            <!-- Post Items End -->
            <?php
            }
            ?>
        </div>
        <!-- Video Main Content End -->

    </div>
</div>

<script>
    //create iframe and replace
function playYoutubeVideo(link){
    var newWidth = document.getElementById('play-frame').offsetWidth;
    var newHeigth = .56*newWidth;
    document.getElementById( "play-frame" ).innerHTML = `
    <iframe width="${newWidth}" height="${newHeigth}" src="${link}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    `
}
</script>