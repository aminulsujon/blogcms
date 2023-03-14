
<div class="main--content" style="padding-bottom:0">
    <div class="container">
    <!-- Post Items Start -->
    <div class="post--items post--items-4" data-ajax-content="outer">
        <ul class="nav row" data-ajax-content="inner">
            

            <li class="col-md-4 ptop--30 pbottom--30 m_s_l">
                <?= $this->element('usn/latest') ?>
            </li>
            <li class="col-md-8 ptop--30 pbottom--30">
                <!-- Post Items Title Start -->
                <?= $this->element('usn/postTitle',['txt'=>'টপ-স্টোরিস'])?>

                <!-- Post Items Start -->
                <div class="post--items post--items-2" data-ajax-content="outer">
                    <ul class="nav row" data-ajax-content="inner">
                    <?php
                    if(!empty($products_top)){
                        $products_top = json_decode($products_top,true);
                        $i=1;
                        foreach($products_top as $product){
                            if($i > 1 && $i % 2 == 0){
                                $cls_mobile_hide = "";
                            }else{
                                $cls_mobile_hide = "hidden-md hidden-lg";
                            }
                            ?>
                            <li class="col-md-6">
                                <div class="post--item post--layout-4">
                                    <div class="post--img">
                                        <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb"><img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="" data-rjs="2"></a>
                                        <div class="post--info">
                                            <ul class="nav">
                                                <li class="hidden"><a href="#">Admin</a></li>
                                                <li><?= $this->element('usn/dateLink',['created'=>$product['created']])?></li>
                                            </ul>
                                            <div class="title">
                                                <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link"><?= $product['title'] ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12 <?= $cls_mobile_hide?>">
                                <hr class="divider">
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
            </li>
        </ul>

        <!-- Preloader Start -->
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
        <!-- Preloader End -->
    </div>
    <!-- Post Items End -->
    </div>
</div>
<!-- Top Content End -->
<!--  End Top News-->