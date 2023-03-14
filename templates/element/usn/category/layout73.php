<!-- L5/5 -->
<div class="col-md-4 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>

    <!-- Post Items Start -->
    <div class="post--items post--items-2" data-ajax-content="outer">
        <ul class="nav row gutter--15" data-ajax-content="inner">
        <?php
        if(!empty($tag['products'])){
            $i = 1;
            foreach($tag['products'] as $product){
                if($i==1){
                    $cls_gridder = "col-xs-12";
                    $post_layout = "post--layout-1";
                    $img_path = "small";
                }else{
                    $cls_gridder = "col-xs-6"; 
                    $post_layout = "post--layout-2";    
                    $img_path = "thumb";              
                }
                ?>
                <li class="<?= $cls_gridder ?>">
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
                if($i==1 || $i%3 == 0){
                    ?><li class="col-xs-12">
                    <!-- Divider Start -->
                    <hr class="divider">
                    <!-- Divider End -->
                </li><?php
                }
                ?>
                
                <?php
                if($i==5){break;}
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


<!-- World News End -->
    </div>
    </div>
    </div>
    </div>