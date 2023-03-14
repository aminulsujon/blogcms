<?php 
// The first box content
// pr($products_headingbox);
$products_lead = json_decode($products_lead,true);
?>
<div class="main--content bg-black">
    <section class="">
        <!-- Heading Items Title Start -->
        <div class="owl-wrapper box-heading">
          <div class="owl-carousel-headingbox owl-theme">
          <?php
          foreach($products_lead as $product){
            ?>
            <div class="item">
                <div class="post--item post--layout-1">
                    <div class="post--img">
                        <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                          <figure>
                            <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-medium-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                            <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                          </figure>
                        </a>
                        <div class="post--info">
                            <ul class="nav meta">
                                <li class="hidden"><a href="#">Astaroth</a></li>
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
          }
          ?>  
        </div>
    </section>
</div>