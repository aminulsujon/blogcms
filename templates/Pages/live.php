<?php 
use Cake\I18n\Time;
//pr($live);die();
if(!empty($live)){
    $live = json_decode($live,true);
    $live_code = $live['details'];
    $live_title = $live['title'];
}elseif(!empty($live_galleries)){
    $live_galleries = json_decode($live_galleries,true);
    $live_code = $live_galleries[0]['details'];
    $live_title = $live_galleries[0]['title'];
}
?>
<h1 class="page-heading line-height-1 mb-4 mt-4"><a href="<?= $head_url ?>live" class="color-theme">সরাসরি সম্প্রচার</a></h1>
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
    <h2 class="figure-caption mt-2"><?= $live_title?></h2>
    </div>
    <div class="col-sm-4"><?= $this->element('ad300x250');?>
        <?php 
        if(!empty($live_galleries)){
            if(!is_array($live_galleries)){
                $live_galleries = json_decode($live_galleries,true);
            }
            //foreach($live_galleries as $product):
                ?>
                <div class="bg-ash p-4">
                <h2 class="text-center h4">সরাসরি সংবাদ</h2>
                <?php
                foreach ($live_galleries as $product) {
                    ?><a class="d-block mt-4" href="<?= $head_url ?>live/<?= $product['slug'] ?>" class="color-theme2"><?= $product['title'] ?></a><?php 
                }
                ?>
                </div>
                <?php
            //endforeach;
        }
        ?>
    </div>
</div>

