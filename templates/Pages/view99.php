<?php
if(!empty($product)){
  $product = json_decode($product,true);
  //pr($product);die();
}
?>
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= $siteoptions['web_url']?>" class="btn-link"><i class="fa fm fa-home"></i>প্রচ্ছদ</a></li>
            <?php 
            $t = 1;
            if(!empty($product['tags'])){
              foreach ($product['tags'] as $tag) {
                if($t==1){
                  ?>
                  <li><a href="<?= $siteoptions['web_url']?>/category/<?= $tag['slug']?>"><?= $tag['title']?></a></li>
                  <?php
                }else{
                  ?>
                  , <li><a href="<?= $siteoptions['web_url']?>/category/<?= $tag['slug']?>"><?= $tag['title']?></a></li>
                  <?php
                }
                $t++;
              }
            }
            ?>
            <li class="active"><span><?= $product['title'] ?></span></li>
        </ul>
    </div>
</div>

<div class="main-content--section pbottomsha--30">
  <div class="container">
      <div class="row" style="transform: none;">
          <!-- Main Content Start -->
        
          <div class="main--content col-md-8" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: relative; transform: none;">
                  <!-- Post Item Start -->
                  <div class="post--item post--single post--title-largest pd--30-0">

                      <div class="post--info">
                          <div class="title">
                              <h1 class="h4"><?= $product['title']?></h1>
                          </div>
                          <ul class="nav">
                              <li><?= $this->element('usn/dateLinkDetails',['created'=>$product['created']])?></li>
                          </ul>
                          <div class="sharethis-inline-share-buttons"></div>
                      </div>
                      
                      

                      <div class="post--img">
                      <figure>
                          <img style="display:block;" src="<?= $siteoptions['web_resource'] ?>/img/products/<?= h($product['uploads'][0]['imgname']) ?>-medium-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="<?= $product['uploads'][0]['imgname']?>" title="<?= $product['uploads'][0]['caption']?>">
                          <figurecaption style="display:block;border-bottom:1px solid #ddd;padding:10px 0;color:gray"><?= $product['uploads'][0]['caption'] ?></figurecaption>
                      </figure>
                      </div>

                      <div class="post--content">
                          <?= $product['details']?>
                      </div>
                  </div>
                  <!-- Post Item End -->
          
                  <!-- Advertisement Start -->
                  <div class="ad--space pd--20-0-40">
                      <a href="#">
                          <img src="<?= $siteoptions['web_url'] ?>/img/advertise/ad4.jpg" alt="ad4.jpg" class="center-block">
                      </a>
                  </div>
                  <!-- Advertisement End -->
               


                  <!-- Post Tags Start -->
                  <div class="widget--title">
                    <h2 class="h4">আরও পড়ুন</h2>
                    <i class="icon fa fa-newspaper-o"></i>
                </div>
                  <div class="post--items post--items-2">
                    <ul class="nav row">
                        <?php 
                        if(!empty($products_tagged)){
                            $products = json_decode($products_tagged,true);
                            //pr($products);die();
                            foreach($products['products'] as $product){
                                ?>
                                <li class="col-sm-6 pbottom--30">
                                <!-- Post Item Start -->
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
                                                <div class="title">
                                                    <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link"><?= $product['title'] ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                    <!-- Post Item End -->
                                </li>
                                <?php
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

                  <!-- Post Related Start -->
                  
              <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 760px; height: 3727px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
          </div>
          <!-- Main Content End -->

          <!-- Main Sidebar Start -->
          <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            <!-- Widget Start -->
            <?= $this->element('usn/latest') ?>
            <div class="widget">
                <!-- Ad Widget Start -->
                <div class="ad--widget">
                    <div class="row">
                        <div class="col-12">
                            <a href="#">
                                <img src="<?= $siteoptions['web_url'] ?>/img/advertise/300x250.png" alt="" data-rjs="2">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Ad Widget End -->   
            </div>
        </div>


        
  </div>
</div>