<!-- layout 9 -->
<div class="main-content--section pbottom--30">
<div class="container">
<div class="main--content">
<div class="row">
<div class="col-md-8 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>
    <!-- Post Items Title End -->

    <!-- Post Items Start -->
    <div class="post--items" data-ajax-content="outer">
        <ul class="nav row gutter--15" data-ajax-content="inner">
            
        <?php
            if(!empty($tag['products'])){
                $i = 1;
                foreach($tag['products'] as $product){
                    if($i<7){
                    ?>
            <li class="col-md-4 col-xs-6 col-xxs-12" style="margin-bottom:15px">
                <!-- Post Item Start -->
                <div class="post--item post--layout-1">
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
            <li class="col-xs-12 hidden shown-xxs">
                <!-- Divider Start -->
                <hr class="divider">
                <!-- Divider End -->
            </li>
            <?php
                    //break;
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
<!-- Foods and Recipes End --><div class="main--sidebar col-md-4 col-sm-4 ptop--30 pbottom--30" >
    <!-- Widget Start -->
    <div class="widget">
        <?= $this->element('ad300x250')?>
    </div>
    <!-- Ad Widget End -->
</div>
<!-- World News End -->
    </div>
    </div>
    </div>