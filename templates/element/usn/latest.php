<div class="tabs-container p-t-10" style="height:627px;">
  <div class="tabs-wrapper web_tas">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
        <a class="p-5" href="#latest" aria-controls="latest" role="tab" data-toggle="tab"> সর্বশেষ </a>
      </li>
      <li role="presentation">
        <a class="p-5" href="#popular" aria-controls="popular" role="tab" data-toggle="tab"> জনপ্রিয় </a>
      </li>
    </ul>
    <div class="tab-content" style="overflow: auto; height: 570px">
      <div role="tabpanel" class="tab-pane fade in active" id="latest">
        <div class="most-viewed">
          <div class="row mobile_list_simple ">
            <?php
            if(!empty($products_latest)){
                $products_latest = json_decode($products_latest,true);
                foreach($products_latest as $product){
                  if(!empty($product['uploads'][0]['imgname'])){
                      $img_id = $product['uploads'][0]['id'];
                      $img_name = $product['uploads'][0]['imgname'];
                      $img_caption = $product['uploads'][0]['caption'] ?? '';
                      $img_path = "small";
                  }else{
                      $img_id = "00";
                      $img_name = "photo";
                      $img_caption = $siteoptions['web_name'];
                      $img_path = "small";
                  }
                    ?>
                    <div class="col-xs-12 p-t-10 p-b-10 br-bottom item" style="padding-bottom: 15px;">
                        <div class="post--item post--layout-3">
                            <div class="post--img  cls-topper">
                                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                                <figure>
                                    <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-<?= $img_path ?>-<?= $img_id ?>.jpg" alt="--" title="" data-rjs="2">
                                    <figurecaption class="hidden"><?= $img_caption ?></figurecaption>
                                </figure>
                                </a>
                                <div class="post--info">
                                    <div class="title">
                                        <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link web_txt"><?= $product['title'] ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
            }
            ?>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="popular">
        <div class="most-viewed">
          <div class="row mobile_list_simple ">
            <?php 
            if(!empty($products_popular)){
                $products_popular = json_decode($products_popular,true);
                foreach($products_popular as $product){
                  if(!empty($product['uploads'][0]['imgname'])){
                    $img_id = $product['uploads'][0]['id'];
                    $img_name = $product['uploads'][0]['imgname'];
                    $img_caption = $product['uploads'][0]['caption'] ?? '';
                    $img_path = "small";
                }else{
                    $img_id = "00";
                    $img_name = "photo";
                    $img_caption = $siteoptions['web_name'];
                    $img_path = "small";
                }
                  ?>
                  <div class="col-xs-12 p-t-10 p-b-10 br-bottom item" style="padding-bottom: 15px;">
                      <div class="post--item post--layout-3">
                          <div class="post--img  cls-topper">
                              <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                              <figure>
                                  <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-<?= $img_path ?>-<?= $img_id ?>.jpg" alt="--" title="" data-rjs="2">
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
                  </div>
                  <?php 
                }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .tabs-wrapper {
    position: relative;
    background-color: #eee
  }

  .nav-tabs {
    width: 100%;
    border-bottom: 2px solid;
  }

  .nav-tabs>li {
    width: 50%
  }

  .nav-tabs>li>a {
    text-align: center;
    font-weight: 600;
    letter-spacing: .5px;
    padding: 8px 0;
    border-radius: 0;
    border: none;
    margin-right: 0;
  }

  .tabs-container .nav-tabs>li.active>a,
  .tabs-container .nav-tabs>li.active>a:focus,
  .tabs-container .nav-tabs>li.active>a:hover {
    color: #fff;
    background-color: #16224d;
    padding: 8px 0;
    border: none;
    margin-right: 0;
  }

  .tabs-container .nav>li>a:focus,
  .tabs-container .nav>li>a:hover {
    text-decoration: none;
    background-color: #fff;
    border-bottom:none;
    border: none;
    padding: 8px 0;
    margin-right: 0;
  }

  .nav-tabs>li>a:hover {
    border-color: #fff
  }

  .most-viewed,
  .popular-news {
    padding: 15px
  }

  .most-viewed .content li {
    display: block;
    border-bottom: 1px solid #e0e0e0;
    line-height: 20px;
    padding: 20px 0
  }

  .most-viewed .content li .count {
    width: 20%;
    float: left;
    color: #888;
    font-size: 40px;
    padding-right: 20px;
    line-height: 24px;
    font-family: cormorant garamond, serif;
    font-style: italic;
    font-weight: 600
  }

  .most-viewed .content li .text {
    width: 80%;
    float: left;
    font-size: 1.07692em;
    padding-left: 20px;
    border-left: 1px solid #aaa;
    font-weight: 600
  }

  .most-viewed .content li:after {
    content: "";
    display: table;
    clear: both
  }

  .most-viewed .content li:last-child,
  .p-post:last-child {
    border: 0;
    padding-bottom: 10px
  }

  .popular-news {
    text-align: center
  }

  .p-post {
    border-bottom: 1px solid #e0e0e0;
    padding: 20px 0
  }
</style>