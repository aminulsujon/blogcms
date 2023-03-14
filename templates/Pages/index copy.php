<?= $this->element('usn/boxHeading') ?>
<?= $this->element('usn/boxFeature') ?>

<!-- Top News -->
<!-- Top Content Start -->
<?= $this->element('usn/boxTop');?>

<!-- Video Main Content Start -->
<?= $this->element('usn/video') ?>

<!--  Main Content Section Start -->


<!-- Category Contents-->
<!-- Full length 1-->
<?php
if(!empty($products_special)){
    $products_special = json_decode($products_special,true);
    $i = 1;
    foreach($products_special as $tag){
        if($i<3){
            echo $this->element('usn/category/layout'.$tag['layout'],['tag'=>$tag]);
        }
        $i++;
    }
}
?>

<div class="main-content--section pbottom--30 mtop--30">
    <div class="container">       
        <!-- Full length-->
        
        <!-- end Full length -->

        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" >
                <div class="">
                    <div class="row">
                        <?php
                        //pr($products_special);die();
                        if(!empty($products_special)){
                            $i = 1;
                            foreach($products_special as $tag){
                                if($i<3){

                                }else{
                                    echo $this->element('usn/category/layout'.$tag['layout'],['tag'=>$tag]);
                                    //echo '<div style="margin:20px 0;text-align:center;padding:20px;background:#fdfdfd">advertise top  '.$tag['layout'].'</div>';
                                }
                                $i++;
                            }
                        }
                        ?>


                        <!-- Ad Start -->
                        <!-- <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="ad--space">
                                <a href="#">
                                    <img src="<?= $siteoptions['web_layout']?>/img/ads-img/ad-728x90-01.jpg" alt="" class="center-block">
                                </a>
                            </div>
                        </div> -->
                        <!-- Ad End -->

                        

                        <!-- Politics Start -->
                        
                        <!-- Health End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" >
                <div class="">
                    <!-- Widget Start -->
                    <div class="widget">
                        <!-- Ad Widget Start -->
                        <div class="ad--widget">
                            <div class="row">
                                <div class="col-12">
                                    <a href="#">
                                        <img src="<?= $siteoptions['web_url']?>/img/advertise/300x250.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Ad Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <?= $this->element('usn/widgetSocial')?>
                    </div>
                    <!-- Widget End -->
                    <!-- Widget Start -->
                    <div class="widget">
                        <?= $this->element('usn/category/layout10')?>
                    </div>
                    
                </div>
            </div>
            <!-- Main Sidebar End -->
        </div>
            

        <div class="row" style="display:none">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7">
                <div class="">
                    <div class="row">
                        <!-- Health and fitness Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Education</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_health_fitness_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_health_fitness_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/health-and-fitness-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Business</a>
                                                <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bathin</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/health-and-fitness-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Maclaan John</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Established fact that a reader will be distracted by the readable content</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/health-and-fitness-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Ziminiar</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/health-and-fitness-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Vanth</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/health-and-fitness-05.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Vanth</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
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
                        <!-- Health and fitness End -->

                        <!-- Lifestyle Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">IT World</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_lifestyle_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_lifestyle_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/lifestyle-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Fashion</a>
                                                <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Siriya attaced by a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/lifestyle-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/lifestyle-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/lifestyle-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/lifestyle-05.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
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
                        <!-- Lifestyle End -->

                        <!-- Foods and Recipes Start -->
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Religion</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_food_resturent_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_food_resturent_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/food-and-resturent-01.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-12 hidden shown-xxs">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/food-and-resturent-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/food-and-resturent-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
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
                        <!-- Foods and Recipes End -->

                        <!-- Photo Gallery Start -->
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Photo Gallery</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_photo_gallery_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_photo_gallery_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-1" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-md-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/photo-gallery-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Serfer</a>
                                                <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 05:52 pm</a></li>
                                                    </ul>

                                                    <div class="title text-xxs-ellipsis">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/photo-gallery-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/photo-gallery-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="<?= $siteoptions['web_layout']?>/img/home-img/photo-gallery-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
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
                        <!-- Photo Gallery End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30">
                <div class="">
                    
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title" data-ajax="tab">
                            <h2 class="h4">Voting Poll (Radio)</h2>

                            <div class="nav">
                                <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>

                                <span class="divider">/</span>

                                <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Poll Widget Start -->
                        <div class="poll--widget" data-ajax-content="outer">
                            <ul class="nav" data-ajax-content="inner">
                                <li class="title">
                                    <h3 class="h4">Do you think the cost of sending money to mobile phone should be reduced?</h3>
                                </li>

                                <li class="options">
                                    <form action="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="option-1">
                                                <span>Yes</span>
                                            </label>

                                            <p>65%<span style="width: 65%;"></span></p>
                                        </div>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="option-1">
                                                <span>No</span>
                                            </label>

                                            <p>28%<span style="width: 28%;"></span></p>
                                        </div>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="option-1">
                                                <span>Average</span>
                                            </label>

                                            <p>07%<span style="width: 07%;"></span></p>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Vote Now</button>
                                    </form>
                                </li>
                            </ul>

                            <!-- Preloader Start -->
                            <div class="preloader bg--color-0--b" data-preloader="1">
                                <div class="preloader--inner"></div>
                            </div>
                            <!-- Preloader End -->
                        </div>
                        <!-- Poll Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <!-- Ad Widget Start -->
                        <div class="ad--widget">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#">
                                        <img src="<?= $siteoptions['web_layout']?>/img/advertise/ad-150x150-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col-sm-6">
                                    <a href="#">
                                        <img src="<?= $siteoptions['web_layout']?>/img/ads-img/ad-150x150-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Ad Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title" data-ajax="tab">
                            <h2 class="h4">Opinion</h2>

                            <div class="nav">
                                <a href="#" class="prev btn-link" data-ajax-action="load_prev_readers_opinion_widget">
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>

                                <span class="divider">/</span>

                                <a href="#" class="next btn-link" data-ajax-action="load_next_readers_opinion_widget">
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- List Widgets End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget" style="display:none">
                        <div class="widget--title" data-ajax="tab">
                            <h2 class="h4">Feature</h2>

                            <div class="nav">
                                <a href="#" class="prev btn-link" data-ajax-action="load_prev_editors_choice_widget">
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>

                                <span class="divider">/</span>

                                <a href="#" class="next btn-link" data-ajax-action="load_next_editors_choice_widget">
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- List Widgets Start -->
                        <div class="list--widget list--widget-1" data-ajax-content="outer">
                            <!-- Post Items Start -->
                            
                            <!-- Post Items End -->
                        </div>
                        <!-- List Widgets End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>