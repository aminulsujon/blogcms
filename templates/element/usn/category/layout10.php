<?php 
if(!empty($exclusive)){
    $tag = json_decode($exclusive,true);
    ?>
<div class="widget">
        <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>

    <!-- List Widgets Start -->
    <div class="list--widget list--widget-1">
        
        <!-- Post Items Start -->
        <div class="post--items post--items-3" data-ajax-content="outer">
            <ul class="nav" data-ajax-content="inner">
            <?php 
            //if(!empty($products_latest)){
                $i = 1;
                foreach($tag['products'] as $product){
                    if($i>6){break;}
                    ?>
                    <li>
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-3">
                            <div class="post--img">
                                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb"><img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="" data-rjs="2"></a>
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
            //}
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