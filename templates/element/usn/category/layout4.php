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
                $j = 1;
                foreach($tag['products'] as $product){
                    if($i>9){break;}
                    if($i>5){
                    ?>
                    <li class="col-xs-6 col-md-3 m-mb-c">
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
                        if($j== 2){
                        ?>
                        <li class="col-xs-12 hidden-md hidden-lg">
                            <!-- Divider Start -->
                            <hr class="divider">
                            <!-- Divider End -->
                        </li>
                        <?php
                        }
                    }
                    $j++;
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
    if(!empty($latest_poll)){
        $latest_poll = json_decode($latest_poll,true);
        ?>
        <div class="widget" style="background:#f7f7f7;">
            <div class="widget--title">
                <h2 class="h4" style="padding-left:20px">অনলাইন জরিপ</h2>
            </div>
            <?= $this->Form->create(NULL,['action'=>['https://www.news24bd.net/votes/store'],'style'=>'padding:0 20px 20px 20px' ]) ?>
            <h3 class="h4" style="font-weight:bold"><?= $latest_poll['title']?></h3>
                            <div class="row">
                <?php
                $i=0;
                foreach($latest_poll['voteoptions'] as $options):
                    ?>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 opt">
                    <span>
                        <input type="radio" required="required" id="option<?= $i?>" name="poll" value="<?= $options['id']?>">
                        <label for="option0"><?= $options['voption']?></label>
                    </span>
                    </div>
                    <?php
                    $i++;
                endforeach;
                ?>
                <input type="hidden" value="<?= $latest_poll['id']?>" name="poll_id">
            </div>
            <br>
            <?= $this->Form->button(__('মতামত দিন'),['class'=>'btn btn-success','style'=>'font-size:20px;font-weight:normal']) ?>
            <a href="https://www.news24bd.net/poll" class="btn btn-success" style="float:right">পুরনো ফলাফল </a>
        <?= $this->Form->end() ?>
            
        </div>
        <?php
    }
    ?>
    <?= $this->element('adsense300x250')?>
</div><!-- col-md-4 -->

</div>
</div>
</div>
</div>