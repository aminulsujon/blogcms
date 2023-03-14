<!-- L4-->
<div class="main-content--section pbottom--30">
<div class="container">
<div class="main--content">
<div class="row">
<div class="col-md-8 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>

    <!-- Post Items Start -->
    <div class="post--items post--items-2" data-ajax-content="outer">
        <ul class="nav row" data-ajax-content="inner">
            <?php
            if(!empty($tag['products'])){
                $i = 1;
                foreach($tag['products'] as $product){
                    ?>
                    <li class="col-md-6">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                <figure>
                                    <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                    <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                </figure>
                                </a>
                                <div class="post--info">
                                    <div class="title">
                                        <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link"><?= $product['title'] ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </li>
                    <li class="col-xs-12 hidden-md hidden-lg">
                        <!-- Divider Start -->
                        <hr class="divider">
                        <!-- Divider End -->
                    </li>
                    <?php
                    break;
                    $i++;
                }
            }
            ?>

            <li class="col-md-6">
                <div class="post--items post--items-3">
                <ul class="nav row">
                <?php
                if(!empty($tag['products'])){
                    $i = 1;
                    foreach($tag['products'] as $product){
                        if($i>4){break;}
                        if($i>1){
                        ?>
                        <li class="col-xs-12">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                    <figure>
                                        <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                        <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                    </figure>
                                    </a>
                                    <div class="post--info">
                                        <ul class="nav meta">
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
                        }
                        $i++;
                    }
                }
                ?>
                </ul>
                </div>
            </li>
        </ul>
        <ul class="nav row" style="margin-top:20px" data-ajax-content="inner">
            <?php
            if(!empty($tag['products'])){
                $i = 1;
                foreach($tag['products'] as $product){
                    if($i>9){break;}
                    if($i>5){
                    ?>
                    <li class="col-xs-3">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                <figure>
                                    <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                    <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                </figure>
                                </a>
                                <div class="post--info">
                                    <ul class="nav meta">
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
                    }
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
<!-- National End -->

<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" >
    <?php
    if($tag['slug'] == 'politics'){
        if(!empty($opinion)){
            $opinion = json_decode($opinion,true);
        ?>
        
        <!-- L601/5 -->
        <div class="">
            <!-- Post Items Title Start -->
            <?= $this->element('usn/postTitle',['txt'=>$opinion['title'],'txt_slug'=>$opinion['slug']])?>

            <!-- Post Items Start -->
            <div class="post--items post--items-3" data-ajax-content="outer">
                <ul class="nav" data-ajax-content="inner">
                <?php
                
                    
                    $i = 1;
                    foreach($opinion['products'] as $product){
                        if($i==1){
                            $cls_gridder = "col-xs-12";
                            $post_layout = "post--layout-1";
                            $img_path = "small";
                        }else{
                            $cls_gridder = "col-xs-6"; 
                            $post_layout = "post--layout-3";    
                            $img_path = "thumb";              
                        }
                        ?>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item <?= $post_layout ?>">
                                <div class="post--img">
                                    <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                    <figure>
                                        <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-<?= $img_path ?>-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                        <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                    </figure>
                                    </a>
                                    <div class="post--info">
                                        <ul class="nav meta">
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
                        if($i==3){break;}
                        $i++;
                    }
                
                ?>
                </ul>
            </div>
            <!-- Post Items End -->
        </div>
        <?php
        }
    }
    ?>
    
</div>

</div>
</div>
</div>
</div>
<!-- <h1 class="remove">layout4</h1> -->