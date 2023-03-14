<style>
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}
.embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
</style>
<?php
if(!empty($live_galleries)){
    $live_galleries = json_decode($live_galleries,true);
    //pr($live_galleries);die();
    $live_code = $live_galleries[0]['details'];
    $live_title = $live_galleries[0]['title'];
    ?>
    <div class="homelive p-4 bg-dark mb-4">
    
    <div class="row">
        <div class="col-sm-8">
        
            <div class="embed-responsive embed-responsive-16by9">
        
                <?php 
                if(filter_var($live_code, FILTER_VALIDATE_URL)){
                    ?>
                    <iframe src="<?php echo $live_code?>" title=" player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php
                }else{
                    echo  $live_code;
                }
                ?>
            </div>
            <h2 class="figure-caption mt-2 text-white"><?= $live_title?></h2>
        
        </div>
        <div class="col-sm-4"><?= $this->element('ad300x250live');?>
            
        </div>
    </div>
            </div><?php
}
?>

