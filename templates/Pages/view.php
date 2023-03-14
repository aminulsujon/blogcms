<?php
if(!empty($product)){
  $product = json_decode($product,true);
  //pr($product['reporter']['namebn']);die();
  if(!empty($product['reporter'])){
      $reporter = $product['reporter'];
  }else{
      $reporter = "ডেস্ক রিপোর্ট";
  }
}
?>
<style>
    .news-shoulder,.news-hanger{color:#de7a19;line-height:.8;font-size:22px;}
    .news-hanger{margin-top:5px}
    .view-post-extended .title{height: 45px;overflow:hidden;}
</style>
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

<section class="text-center hidden-xss"style ="margin-top: 20px;">
    <a href="https://www.meghnastarcables.com/" target="_blank">
    <picture>
        
        <img src="<?= $siteoptions['web_url']?>/img/contents/survibal.png" alt="meghna" />
    </picture>
    </a>
</section>

<div class="main-content--section pbottomsha--30">
  <div class="container">
      <div class="row" style="transform: none;">
          <!-- Main Content Start -->
        
          <div class="main--content col-md-8" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: relative; transform: none;">
                  <!-- Post Item Start -->
                  <div class="post--item post--single post--title-largest pd--30-0">

                      <div class="post--info" style="border-bottom:1px solid #ddd;padding-bottom:5px">
                          <?php
                          if(!empty($product['shoulder'])){
                              echo '<h2 class="news-shoulder">'.$product['shoulder'].'</h2>';
                          }
                          ?>
                          <div class="title">
                              <h1 class="h4"><?= $product['title']?></h1>
                          </div>
                          <?php
                          if(!empty($product['hanger'])){
                              echo '<h3 class="news-hanger">'.$product['hanger'].'</h3>';
                          }
                        
                          if(!empty($product['pDate'])){
                              $pDate = $product['pDate'];
                          }else{
                              $pDate = "";
                          }

                          ?>
                          
                          <div class="row">
                              <div class="col-md-6">
                                <ul class="nav">
                                    <li><i class="fa fa-user"></i> <?= $reporter?></li>
                                    <li><?= $this->element('usn/dateLinkDetails',['created'=>$product['created'],'pDate'=>$pDate])?></li>
                                </ul>
                              </div>
                              <div class="col-md-6" style="padding-top:10px"><div class="sharethis-inline-share-buttons"></div></div>
                          </div>
                      </div>
                        <?php
                        if(!empty($product['uploads'][0]['imgname'])){
                            $img_id = $product['uploads'][0]['id'];
                            $img_name = $product['uploads'][0]['imgname'];
                            $img_caption = $product['uploads'][0]['caption'];
                        }else{
                            $img_id = "00";
                            $img_name = "photo";
                            $img_caption = $siteoptions['web_name'];
                        }
                        ?>
                      <div class="post--img" style="margin-top:10px">
                      <figure>
                          <img style="display:block;width:100%" src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-medium-<?= $img_id ?>.jpg" alt="<?= $img_name ?>" title="<?= $img_caption?>">
                          <?php if(!empty($product['uploads'][0]['caption'])){
                              ?><figurecaption style="display:block;border-bottom:1px solid #ddd;padding:10px 0;color:gray"><?= $product['uploads'][0]['caption'] ?></figurecaption><?php
                          } ?>
                      </figure>
                      </div>

                      <div class="post--content" id="des_cription" style="text-align:justify">
                        <?php
                        $newcontent = preg_replace("/<p[^>]*?>/", "", $product['details']);
                        $newcontent = str_replace("</p>", "<br/><br/>", $newcontent);
                        $str = explode("<br/><br/>",$newcontent);
                        if(!empty($str[0])){
                            echo $str[0].'<br><br>';
                        }
                        ?>
                        <section class="text-center" style="margin-bottom: 20px;">
                            <a href="https://www.meghnastarcables.com/" target="_blank">
                            <picture>
                                <source srcset="https://www.news24bd.net/img/contents/meghna-mobile-after-lead.jpg" media="(max-width: 600px)">
                                <img src="https://www.news24bd.net/img/contents/meghna-header.jpg" alt="meghna" data-rjs="2" data-rjs-processed="true">
                            </picture>
                            </a>
                        </section>
                        <?php
                        if(!empty($str[1])){
                            echo $str[1].'<br><br>';
                        }
                        if(!empty($str[2])){
                            echo $str[2].'<br>';
                        }
                        // echo $str[0].'<br><br>'.$str[1].'<br><br>'.$str[2].'<br><br>';
                        echo '<div style="text-decoration: underline;
                        color: #ff0000;
                        background: #f9f9f9;
                        text-align: center;
                        margin: 10px 0;"><strong><a style="color: #ff0000; text-decoration: underline;" href="https://news.google.com/publications/CAAqBwgKMLKspgswmre-Aw?oc=3&amp;ceid=BD:bn&amp;hl=bn&amp;gl=BD" target="_blank" rel="noreferrer noopener">
                        
                        গুগল নিউজ এ news24bd.net এর সর্বশেষ খবর পেতে ফলো করুন
                        </a></strong></div>';
                        foreach ($str as $value => $key){
                            if($value > 2){
                                echo $key.'<br><br>';
                            }
                        }
                        ?>
                      </div>
                  </div>
                  <!-- Post Item End -->
                  <div class="sharethis-inline-share-buttons"></div>

                  <section class="text-center hidden-xss"style ="margin-top: 20px;">
                        <a href="https://www.meghnastarcables.com/" target="_blank">
                        <picture>
                            
                            <img src="<?= $siteoptions['web_url']?>/img/contents/safety.png" alt="meghna" />
                        </picture>
                        </a>
                    </section>
                  <!-- Post Tags Start -->
                    <div class="widget--title mt--4">
                    <h2 class="h4">আরও পড়ুন</h2>
                        <i class="icon fa fa-newspaper-o"></i>
                    </div>
                  <div class="post--items post--items-2 view-post-extended">
                    <ul class="nav row">
                        <?php 
                        if(!empty($products_tagged)){
                            $products = json_decode($products_tagged,true);
                            //pr($products);die();
                            foreach($products['products'] as $product){
                                if(!empty($product['uploads'][0]['imgname'])){
                                    $img_id = $product['uploads'][0]['id'];
                                    $img_name = $product['uploads'][0]['imgname'];
                                    $img_caption = $product['uploads'][0]['caption'];
                                }else{
                                    $img_id = "00";
                                    $img_name = "photo";
                                    $img_caption = $siteoptions['web_name'];
                                }
                                ?>
                                <li class="col-xs-6 col-sm-4 pbottom--30">
                                <!-- Post Item Start -->
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-2">
                                        <div class="post--img">
                                            <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                            <figure>
                                                <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-small-<?= $img_id ?>.jpg" alt="<?= $img_name?>" title="<?= $img_caption?>">
                                                <figurecaption class="hidden"><?= $img_caption ?></figurecaption>
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
            <div class="widget"><?= $this->element('usn/latest') ?></div>
            <div class="widget"><?= $this->element('adsdetails1')?></div>
            <section class="text-center hidden-xss"style ="margin-top: 20px;">
                <a href="https://www.meghnastarcables.com/" target="_blank">
                <picture>
                    
                    <img src="<?= $siteoptions['web_url']?>/img/contents/home.png" alt="meghna" />
                </picture>
                </a>
            </section>
        </div>
  </div>
</div>
