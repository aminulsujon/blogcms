<div class="main-content--section pbottom--30">
<div class="container">
<div class="main--content">
    <!-- Post Items Start -->
    <div class="post--items post--items-1 pd--30-0">
        <!-- Post Items Title Start -->
        <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>

        <!-- Post Items Title End -->
        <div class="row gutter--15">
            <div class="col-12 pbottom--30">
            <?php
            if(!empty($tag['products'])){
                $i=0;
                echo '<div class="row">';
                foreach($tag['products'] as $product){
                    if($i>11){break;}
                    if($i>2){
                        $img_path = "thumb";
                        $post_layout = "post--layout-3";
                        $post_topper = "cls-topper";
                    }else{
                        $img_path = "small";
                        $post_layout = "post--layout-1";
                        $post_topper = "";
                    }
                    if(!empty($product['uploads'][0]['imgname'])){
                        $img_id = $product['uploads'][0]['id'];
                        $img_name = $product['uploads'][0]['imgname'];
                        $img_caption = $product['uploads'][0]['caption'] ?? '';
                    }else{
                        $img_id = "00";
                        $img_name = "photo";
                        $img_caption = $siteoptions['web_name'];
                    }
                    ?>
                    <div class="col-sm-4">
                        <div class="post--item <?= $post_layout ?>">
                            <div class="post--img  <?= $post_topper ?>">
                                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                <figure>
                                    <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-<?= $img_path ?>-<?= $img_id ?>.jpg" alt="<?= $img_name?>" title="<?= $img_caption?>">
                                    <figurecaption class="hidden"><?= $img_caption ?></figurecaption>
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
                    </div>
                    <?php
                    if($i%3 == 2){echo '</div><div class="row">';}
                    $i++;
                }
                echo '</div>';
            }
            ?>
            </div>
        </div>
    </div>
    <!-- Post Items End -->
</div>
</div>
</div>

