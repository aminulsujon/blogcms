<div class="main-content--section section-wrapper-carosel pbottom--30">
<div class="container">
<?= $this->element('adsense728x90')?>
<section class="main--content mt--4">
    <!-- Heading Items Title Start -->
    <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>
    <div class="owl-wrapper web_exclusive" style="padding: 20px;">
      <div class="owl-carousel owl-theme">
      <?php
      $i = 1;
      foreach($tag['products'] as $product){
        ?>
        <div class="item">
            <a class="h4 btn-link" href="<?= $siteoptions['web_resource'] ?>/news/<?= $product['id'] ?>">
              <figure>
              <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                <figurecaption class="hidden"><?= $product['uploads'][0]['caption'] ?></figurecaption>
              </figure>
              <span class="text-white"><?= $product['title'] ?></span>
            </a>
        </div>
        <?php
        if($i==10){break;}
        $i++;
      }
      ?>  
    </div>
</section>
</div>
</div>