<?php 
if(!empty($products_latest)){
    ?>
<div class="widget" style="background:#f6f6f6">
    <div class="widget--title">
        <h2 class="h4" style="padding-left:20px">সর্বশেষ সংবাদ</h2>
        <i class="icon fa fa-newspaper-o"></i>
    </div>

    <!-- List Widgets Start -->
    <div class="list--widget list--widget-1">
        
        <!-- Post Items Start -->
        <div class="post--items post--items-3" data-ajax-content="outer">
            <ul class="nav" data-ajax-content="inner">
            <?php 
            if(!empty($products_latest)){
                $products_latest = json_decode($products_latest,true);
                $i = 1;
                foreach($products_latest as $product){
                    if($i>6){break;}
                    if(!empty($product['uploads'][0]['imgname'])){
                        $img_id = $product['uploads'][0]['id'];
                        $img_name = $product['uploads'][0]['imgname'];
                    }else{
                        $img_id = "00";
                        $img_name = "photo";
                    }
                    ?>
                    <li>
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-3">
                            <div class="post--img">
                                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb"><img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-small-<?= $img_id ?>.jpg" alt="<?= $img_name ?>" data-rjs="2"></a>
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li class="hidden"><a href="#">Admin</a></li>
                                        <li><?= $this->element('usn/dateLink',['created'=>$product['created']])?></li>
                                    </ul>
                                    <div class="title">
                                        <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link"><?= $product['title'] ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </li>
                    <?php
                    $i++;
                }
            }
            ?>    
            </ul>

            <!-- Preloader Start -->
            <div class="preloader bg--color-0--b" data-preloader="1">
                <div class="preloader--inner"></div>
            </div>
            <!-- Preloader End -->
        </div>
        <!-- Post Items End -->
    </div>
    <!-- List Widgets End -->
</div>
<!-- Widget End -->

<?php 
}
?>