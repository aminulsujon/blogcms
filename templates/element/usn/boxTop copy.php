<div class="main--content pd--30-0">
    <div class="container">
    <!-- Post Items Start -->
    <div class="post--items post--items-4" data-ajax-content="outer">
        <ul class="nav row" data-ajax-content="inner">
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
                                        <a href="<?= $siteoptions['web_url']?>/news/<?= $product['slug']?>" class="thumb"><img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="" data-rjs="2"></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li class="hidden"><a href="#">Admin</a></li>
                                                <li><a href="<?= $siteoptions['web_url']?>/archive/<?= date('Y-m-d',strtotime($product['created'])) ?>"><?= date('d M Y H:i',strtotime($product['created'])) ?></a></li>
                                            </ul>
                                            <div class="title">
                                                <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['slug']?>" class="btn-link"><?= $product['title'] ?></a></h3>
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

            <li class="col-md-4 ptop--30 pbottom--30">
                <div class="widget">
                    <div class="widget--title">
                        <h2 class="h4">Featured News</h2>
                        <i class="icon fa fa-newspaper-o"></i>
                    </div>

                    <!-- List Widgets Start -->
                    <div class="list--widget list--widget-1">
                        <div class="list--widget-nav hidden" data-ajax="tab">
                            <ul class="nav nav-justified">
                                <li>
                                    <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a>
                                </li>
                                <li class="active">
                                    <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                </li>
                                <li>
                                    <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Post Items Start -->
                        <div class="post--items post--items-3" data-ajax-content="outer">
                            <ul class="nav" data-ajax-content="inner">
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/widgets-img/news-widget-01.jpg" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Ninurta</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/widgets-img/news-widget-02.jpg" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Orcus</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/widgets-img/news-widget-03.jpg" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Rahab</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/widgets-img/news-widget-04.jpg" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Tannin</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
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
                    <!-- List Widgets End -->
                </div>
                <!-- Widget End -->
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