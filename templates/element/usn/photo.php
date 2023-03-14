<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Video Main Content Start -->
        <div class="main--content pd--30-0">
            <!-- Post Items Title Start -->
            <?= $this->element('usn/postTitle',['txt'=>'ফটো গ্যালারি'])?>
            <?php
            if(!empty($photos)){
                $photos = json_decode($photos,true);
                //pr($photos);die();
                ?>
            <!-- Post Items Start -->
            <div class="post--items post--items-4" data-ajax-content="outer">
                <ul class="nav row" data-ajax-content="inner">
                    <li class="col-md-8">
                        <div class="owl-wrapper">
                            <div class="owl-carousel-3 owl-theme">
                            <?php
                            foreach($photos[0]['uploads'] as $photo){
                                ?>
                                <div class="item">
                                    <figure>
                                    <img style="margin-bottom:20px" src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($photo['imgname']) ?>-medium-<?= h($photo['id']) ?>.jpg" alt="<?= $photo['imgname']?>" title="<?= $photo['caption']?>">
                                        <figurecaption class=""><?= $photo['caption'] ?></figurecaption>
                                    </figure>
                                </div>
                                <?php
                            }
                            ?>  
                            </div>
                        </div>

                        <!-- Divider Start -->
                        <hr class="divider hidden-md hidden-lg">
                        <!-- Divider End -->
                    </li>
                    <li class="col-md-4">
                        <div class="post--items post--items-3">
                        <ul class="nav row">
                        <?php
                        if(!empty($photos)){
                            $i = 1;
                            foreach($photos as $product){
                                if($i>7){break;}
                                ?>
                                <li class="col-xs-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-3">
                                        <div class="post--img">
                                            <a href="<?= $siteoptions['web_url']?>/photo/<?= $product['id']?>" class="thumb">
                                            <figure>
                                                <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                                <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                            </figure>
                                            </a>
                                            <div class="post--info">
                                                <div class="title">
                                                    <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/photo/<?= $product['id']?>" class="btn-link"><?= $product['title'] ?></a></h3>
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
                        </div>
                    </li>
                </ul>

                <!-- Preloader Start -->
                <div class="preloader bg--color-0--b" data-preloader="1">
                    <div class="preloader--inner"></div>
                </div>
                <!-- Preloader End -->
            </div>
            <!-- Post Items End -->
            <?php
            }
            ?>
        </div>
        <!-- Video Main Content End -->

    </div>
</div>