<?php use Cake\I18n\Time;?>

<?php 

if(!empty($product)){
  $product = json_decode($product,true);
  //pr($product);die();
?>
<div class="row">
  <div class="col-md-8">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= $head_url ?>">প্রচ্ছদ</a></li>
      <li class="breadcrumb-item">
        <?php 
        $t = 1;
        if(!empty($product['tags'])){
          foreach ($product['tags'] as $tag) {
            if($t==1){
              ?>
              <a href="<?= $head_url ?>topic/<?= $tag['slug']?>"><?= $tag['title']?></a>
              <?php
            }else{
              ?>
              , <a href="<?= $head_url ?>topic/<?= $tag['slug']?>"><?= $tag['title']?></a>
              <?php
            }
            $t++;
          }
        }
        ?>
      </li>
      
    </ol>
  </nav>

  <h1 class="h3 color-theme2"><?= $product['title'] ?></h1>
  <div class="mb-4 border-bottom pb-1">
    
      <?php $now = Time::parse($product['created']);?>
        <span class="p-2 color-theme ">
          <?= $now->timeAgoInWords([
      'accuracy' => ['month' => 'month'],
      'end' => '1 year'
      ]);?></span>
      <a class="text-white mr-2" title="Share on Facebook" href="https://www.facebook.com/sharer.php?u=<?= $head_url ?>news/<?= $product['id'] ?>" onclick="javascript:window.open(this.href,
                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                      <svg style="background:#1877f2" class="extracted-svg ex-facebook" viewBox="-17 -13 44 44" enable-background="new 0 0 44 44" width="44px" height="44px" aria-hidden="true" focusable="false">
        <g><path fill="#fff" d="M5.73,17 L5.73,9.246 L8.333,9.246 L8.723,6.223 L5.73,6.223 L5.73,4.294 C5.73,3.419 5.973,2.823 7.228,2.823 L8.828,2.822 L8.828,0.119 C8.551,0.082 7.601,0 6.496,0 C4.189,0 2.609,1.408 2.609,3.995 L2.609,6.223 L0,6.223 L0,9.246 L2.609,9.246 L2.609,17 L5.73,17 Z"></path></g>
        </svg>
                    </a>

      <a class="text-white" title="Share on Twitter" href="https://twitter.com/intent/tweet?text=<?= $product['title'] ?>&amp;url=<?= $head_url ?>news%2F<?= $product['id'] ?>" onclick="javascript:window.open(this.href,
                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                      <svg style="background:#00ACEE" class="extracted-svg ex-twitter" viewBox="-13 -15 44 44" enable-background="new 0 0 44 44" width="44px" height="44px" aria-hidden="true" focusable="false">
        <g><path fill="#fff" d="M5.80573373,15 C12.7721527,15 16.581877,9.22887915 16.581877,4.22385671 C16.581877,4.06002242 16.581877,3.89618812 16.5714931,3.73466135 C17.3122088,3.19816171 17.9525471,2.53359441 18.4602026,1.77326482 C17.7690988,2.08016568 17.0364595,2.28092039 16.28536,2.36976011 C17.0756874,1.89671742 17.6675677,1.15138674 17.9502395,0.274527115 C17.2072164,0.715264453 16.3938137,1.02678037 15.5457981,1.19407596 C14.1105174,-0.331198284 11.7118448,-0.405039095 10.1865706,1.0290879 C9.20241101,1.95440555 8.78590269,3.33315194 9.09049603,4.64844138 C6.04571636,4.4961447 3.20861397,3.05740266 1.28529161,0.691035437 C0.280364327,2.42167943 0.793788713,4.63574999 2.45751448,5.74682343 C1.85525036,5.72951699 1.26567764,5.56683646 0.738408105,5.27262698 L0.738408105,5.32108501 C0.739561868,7.12441605 2.00985456,8.67622684 3.77741896,9.03389326 C3.2201516,9.18618993 2.63519393,9.20811142 2.06754269,9.09850397 C2.56366064,10.6410847 3.98509624,11.6979313 5.60613279,11.7290828 C4.26430681,12.7824682 2.60750362,13.3547344 0.902242404,13.3535807 C0.601110348,13.3524269 0.299978293,13.3339667 7.10542736e-15,13.2982001 C1.73295152,14.4104273 3.74742113,15 5.80573373,14.9965387"></path></g>
      </svg>
                    </a>
          
  </div>

  <?php
  if($product['genus'] == 1){
    ?><?php
    $has_video = 'd-block';
    if(!empty($product['upvideos'])){
      $has_video = 'd-none';
      $i=1;
      foreach ($product['upvideos'] as $video) {
        //pr('pl');die();
         if($i==1){
          ?>
          <div class="mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?= $video['embedlink'] ?>?rel=0" allowfullscreen></iframe>
              
            </div>
            <h2 class="figure-caption mt-2"><?= $video['title']?></h2>
          </div>
          <?php
          break;
          $i++;
         }
      }
    }


    $i=1; 
    if(!empty($product['uploads'])){
      foreach ($product['uploads'] as $image) {
        if($i==1){
          ?>
          <figure class="figure p-2 <?= $has_video ?>">
            <img src="<?= $head_url ?>img/products/<?= h($image['imgname']) ?>-medium-<?= h($image['id']) ?>.jpg" class="figure-img img-fluid rounded" alt="<?= $image['caption']?>">
            <figcaption class="figure-caption"><?= $image['caption']?></figcaption>
          </figure>
          <?php
          break;
        }
      }
    }


    ?>
    <div class="product-description mt-4">
        <?= $product['details'] ?>
    </div>
    <?php
  }elseif($product['genus'] == 2){
    ?><div class="product-description mt-4">
        <?= $product['details'] ?>
    </div><?php
    if(!empty($product['uploads'])){
    foreach ($product['uploads'] as $image) {
      //pr('pl');die();
        ?>
        <figure class="figure p-2 d-block">
          <img src="<?= $head_url ?>img/products/<?= h($image['imgname']) ?>-medium-<?= h($image['id']) ?>.jpg" class="figure-img img-fluid rounded" alt="<?= $image['caption']?>">
          <figcaption class="figure-caption"><?= $image['caption']?></figcaption>
        </figure>
        <?php
    }  
    }
  }elseif($product['genus'] == 3){
    ?><div class="product-description mt-4">
        <?= $product['details'] ?>
    </div><?php
    $i = 1;
    if(!empty($product['uploads'])){
      foreach ($product['uploads'] as $image) {
        //pr('pl');die();
        if($i==1){
          ?>
          <figure class="figure p-2 d-none">
            <img src="<?= $head_url ?>img/products/<?= h($image['imgname']) ?>-medium-<?= h($image['id']) ?>.jpg" class="figure-img img-fluid rounded" alt="<?= $image['caption']?>">
            <figcaption class="figure-caption"><?= $image['caption']?></figcaption>
          </figure>
          <?php
          break;
        }
      }
    }

    if(!empty($product['upvideos'])){
      foreach ($product['upvideos'] as $video) {
        //pr('pl');die();
          ?>
          <div class="mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?= $video['embedlink'] ?>?rel=0" allowfullscreen></iframe>
              
            </div>
            <h2 class="figure-caption mt-2"><?= $video['title']?></h2>
          </div>
          <?php
          
      }
    }
  }
  
  ?>

    

    <div class="h5 mt-4">এই প্রতিবেদনটি শেয়ার করুন</div>
    <div>
      <a class="text-white mr-2" title="Share on Facebook" href="https://www.facebook.com/sharer.php?u=<?= $head_url ?>news/<?= $product['id'] ?>" onclick="javascript:window.open(this.href,
                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                      <svg style="background:#1877f2" class="extracted-svg ex-facebook" viewBox="-17 -13 44 44" enable-background="new 0 0 44 44" width="44px" height="44px" aria-hidden="true" focusable="false">
        <g><path fill="#fff" d="M5.73,17 L5.73,9.246 L8.333,9.246 L8.723,6.223 L5.73,6.223 L5.73,4.294 C5.73,3.419 5.973,2.823 7.228,2.823 L8.828,2.822 L8.828,0.119 C8.551,0.082 7.601,0 6.496,0 C4.189,0 2.609,1.408 2.609,3.995 L2.609,6.223 L0,6.223 L0,9.246 L2.609,9.246 L2.609,17 L5.73,17 Z"></path></g>
        </svg>
                    </a>

      <a class="text-white" title="Share on Twitter" href="https://twitter.com/intent/tweet?text=<?= $product['title'] ?>&amp;url=<?= $head_url ?>news%2F<?= $product['id'] ?>" onclick="javascript:window.open(this.href,
                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                      <svg style="background:#00ACEE" class="extracted-svg ex-twitter" viewBox="-13 -15 44 44" enable-background="new 0 0 44 44" width="44px" height="44px" aria-hidden="true" focusable="false">
        <g><path fill="#fff" d="M5.80573373,15 C12.7721527,15 16.581877,9.22887915 16.581877,4.22385671 C16.581877,4.06002242 16.581877,3.89618812 16.5714931,3.73466135 C17.3122088,3.19816171 17.9525471,2.53359441 18.4602026,1.77326482 C17.7690988,2.08016568 17.0364595,2.28092039 16.28536,2.36976011 C17.0756874,1.89671742 17.6675677,1.15138674 17.9502395,0.274527115 C17.2072164,0.715264453 16.3938137,1.02678037 15.5457981,1.19407596 C14.1105174,-0.331198284 11.7118448,-0.405039095 10.1865706,1.0290879 C9.20241101,1.95440555 8.78590269,3.33315194 9.09049603,4.64844138 C6.04571636,4.4961447 3.20861397,3.05740266 1.28529161,0.691035437 C0.280364327,2.42167943 0.793788713,4.63574999 2.45751448,5.74682343 C1.85525036,5.72951699 1.26567764,5.56683646 0.738408105,5.27262698 L0.738408105,5.32108501 C0.739561868,7.12441605 2.00985456,8.67622684 3.77741896,9.03389326 C3.2201516,9.18618993 2.63519393,9.20811142 2.06754269,9.09850397 C2.56366064,10.6410847 3.98509624,11.6979313 5.60613279,11.7290828 C4.26430681,12.7824682 2.60750362,13.3547344 0.902242404,13.3535807 C0.601110348,13.3524269 0.299978293,13.3339667 7.10542736e-15,13.2982001 C1.73295152,14.4104273 3.74742113,15 5.80573373,14.9965387"></path></g>
      </svg>
                    </a>
    </div>
    <div class="mt-4">
      <a href="#top" class="border-bottom pb-2"><span class="font-weight-bold">&and; </span>
        <span> শুরুতে ফিরে যান</span>
      </a>
    </div>

    <!-- comments -->
    <div class="mt-4" style="padding: 10px;
    border: 1px solid #ddd;
    background: #eee;">
      
        <?= $this->Form->create($comment,['url'=>['controller'=>'comments','action'=>'add']]) ?>
        <fieldset>
            <legend><?= __('আপনার মন্তব্য দিন') ?></legend>
            <?php
                //echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                echo $this->Form->hidden('product_id', ['value' => $product['id']]);
                //echo $this->Form->control('parent_id', ['options' => $parentComments, 'empty' => true]);
                echo $this->Form->control('name',['label'=>false,'class'=>'mt-2 w-100 p-2 form-control','required'=>'required','placeholder'=>'নাম ']);
                echo $this->Form->control('email',['label'=>false,'class'=>'mt-2 w-100 p-2 form-control','placeholder'=>'ইমেইল  ']);
                echo $this->Form->control('phone',['label'=>false,'class'=>'mt-2 w-100 p-2 form-control','placeholder'=>'মোবাইল ']);
                echo $this->Form->control('body',['label'=>false,'class'=>'mt-2 w-100 p-2 form-control','required'=>'required','placeholder'=>'মন্তব্য ']);
                //echo $this->Form->control('status');
            ?>
        </fieldset>
       
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">মন্তব্য দিন</button>
        
        <?= $this->Form->end() ?>
    </div>

    <div class="mt-4">
      <h2 class="h4">পাঠকের মন্তব্য</h2>
      <?php 
      foreach ($product['comments'] as $comment) {
        ?><div class="border-top pt-2 mt-2"><?php
        if(!empty($comment['name'])){
          ?><span class="font-weight-bold"><?= $comment['name']; ?>: </span><?php
        }
        echo $comment['body'];
        ?>
        </div>
        <?php
      }
      ?>
    </div>
  </div><!-- col-md-8 -->

  <div class="col-md-4">
    
      <?php 
      echo $this->element('ad300x250');
      if(!empty($products_top)){
        $products_top = json_decode($products_top,true);
        ?>
        <div class="bg-ash p-4">
          <h2 class="text-center h4">শীর্ষ সংবাদ</h2>
          <?php
          foreach ($products_top as $product) {
            ?><a class="d-block mt-4" href="<?= $head_url ?>news/<?= $product['id'] ?>" class="color-theme2"><?= $product['title'] ?></a><?php 
          }
          ?>
        </div>
        <?php
        
      }
      ?>
    

    <div class="bg-ash p-4 mt-4">
      <h2 class="text-center"><a class="h4 color-theme2" href="<?= $head_url ?>pages/archive">সর্বশেষ সংবাদ</a></h2>
      <?php 
      if(!empty($products_latest)){
        $products_latest = json_decode($products_latest,true);
        $j=1;
        foreach ($products_latest as $product) {

          ?><a class="d-block mt-4" href="<?= $head_url ?>news/<?= $product['id'] ?>" class="color-theme2"><?= $product['title'] ?></a><?php 
          if($j==5){break;}
          $j++;
        }
        
      }
      ?>

    </div>
    <a class="color-theme2 text-center d-block border p-2 border-color-ash" href="<?= $head_url ?>pages/archive">সকল সংবাদ</a>
  </div><!-- col-md-4 -->
</div>

<?php 
}
?>
