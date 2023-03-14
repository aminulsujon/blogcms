<!-- L7/5 -->
<div class="main-content--section pbottom--30">
<div class="container">

<?= $this->element('adsense728x90')?>

<div class="main--content">
<div class="row">
<div class="col-md-8 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>

    <!-- Post Items Start -->
    <div class="post--items post--items-2 web_cook" data-ajax-content="outer">
        <ul class="nav row" data-ajax-content="inner">
        <?php
            if(!empty($tag['products'])){
                $i = 1;
                foreach($tag['products'] as $product){
                    if($i==1){
                    ?>
                    <li class="col-md-6" style="padding-top:20px;padding-bottom:20px">
                        <!-- Post Item Start -->
                        <div style="padding-left:20px;">
                            <div class="post--item post--layout-2">
                                <div class="post--img">
                                    <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                    <figure>
                                        <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-medium-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                        <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                    </figure>
                                    </a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><?= $this->element('usn/dateLink',['created'=>$product['created']])?></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link text-white"><?= $product['title'] ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </li>
                    <?php
                    }else{
                        continue;
                    }
                    $i++;
                }
            }
            ?>

            <li class="col-md-6" style="padding-top:20px;padding-bottom:20px;">
                <div class="ranna">
                    <ul class="nav row">
                        <li class="col-xs-12 hidden-md hidden-lg">
                            <!-- Divider Start -->
                            <hr class="divider">
                            <!-- Divider End -->
                        </li>
                        <?php
                        if(!empty($tag['products'])){
                            $i = 1;
                            foreach($tag['products'] as $product){
                                if($i>1 && $i<6){
                                ?>
                                <li class="col-xs-6">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-2">
                                        <div class="post--img">
                                            <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                            <figure>
                                                <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                                                <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                                            </figure>
                                            </a>
                                            <div class="title" style="">
                                                <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link text-white"><?= $product['title'] ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <?php
                                if($i%3 == 0){
                                    ?><li class="col-xs-12">
                                    </li><?php
                                }
                                }
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
</div>
<!-- Entertainment End -->

