<?php 
//pr($products_headingbox);
$products_shirsho = json_decode($products_shirsho,true);
?>
<div class="main--content mt--4">
    <section class="container-fluid">
        <!-- Heading Items Title Start -->
        <?= $this->element('usn/postTitle',['txt'=>'শীর্ষ ১০'])?>
        <div class="owl-wrapper">
          <div class="owl-carousel owl-theme">
          <?php
          foreach($products_shirsho as $product){
            ?>
            <div class="item">
                <a class="h4 btn-link" href="<?= $siteoptions['web_resource'] ?>/news/<?= $product['id'] ?>">
                  <figure>
                  <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                    <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                  </figure>
                  <span><?= $product['title'] ?></span>
                </a>
            </div>
            <?php
          }
          ?>  
        </div>
    </section>
</div>
<section class="text-center"style ="margin-bottom: 20px;">
    <a href="https://www.meghnastarcables.com/" target="_blank">
    <picture>
        <source srcset="<?= $siteoptions['web_url']?>/img/contents/survibal-m.png"
                media="(max-width: 600px)">
        <img src="<?= $siteoptions['web_url']?>/img/contents/survibal.png" alt="meghna" />
    </picture>
    </a>
</section>