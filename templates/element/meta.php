<?= $this->Html->charset() ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=61a58db6fcaa07001af68cdc&product=inline-share-buttons' async='async'></script>
<link rel="canonical" href="https://www.news24bd.net" />
<?php
$og_site_name = $siteoptions['web_name'];
if(!empty($product)){
  $product = json_decode($product,true);
  //pr($product);die();
  $og_title = $product['title'];
  $og_details = substr(strip_tags($product['details']), 0,150).'...';
  $og_meta_title = $product['title'];
  $og_meta_key = $product['title'];
  if(!empty($product['uploads'][0]['imgname'])){
    $og_image = $siteoptions['web_url'].'/img/products/'.$product['uploads'][0]['imgname'].'-medium-'.$product['uploads'][0]['id'].'.jpg';	
  }else{
    $og_image = $siteoptions['web_url'].'/img/share-banner.jpg';
  }
  $og_link = $siteoptions['web_url'].'/news/'.$product['id'];
}elseif(!empty($cat_details)){
  $cat_details = json_decode($cat_details,true);
  $og_title = $cat_details['title'];
  $og_details = substr(strip_tags($cat_details['details']), 0,150).'...';
  $og_meta_title = $cat_details['title'];
  $og_meta_key = $cat_details['title'];
  $og_image = $siteoptions['web_url']."/img/tags/product-category-medium-".$cat_details['id'].".jpg";
  $og_link = $siteoptions['web_url'].'/category/'.$cat_details['slug'];
}elseif(!empty($settings)){
    $action_name = $this->request->getParam('action');
    $settings = json_decode($settings,true);
    $og_title = $settings['metatitle'];
    $og_details = substr(strip_tags($settings['metades']), 0,150).'...';
    $og_meta_title = $settings['metatitle'];
    $og_meta_key = $settings['metakey'];
    $og_image = $siteoptions['web_url']."/img/pages/pagesetting-medium-".$settings['id'].".jpg";
    if($action_name=='index'){
        $og_link = $siteoptions['web_url'];
    }else{
        $og_link = $siteoptions['web_url'].'/'.$action_name;
    }
}else{
  $og_title = "Latest news photos videos, online bangla news, aminuls.net";
  $og_details = "Get connected with us to get latest news in bangla, aminuls.net";
  $og_meta_title =  "Latest news photos videos, online bangla news, aminuls.net";
  $og_meta_key = "Latest news, photos, videos, online news, bangla news, Bangladesh, aminuls.net";
  $og_image = $siteoptions['web_url'].'/img/share.jpg';
  $og_link = $siteoptions['web_url'];
}
?>
<title><?= $og_title ?></title>
<!-- meta social media & seo -->
<meta name="keywords" content="<?= $og_meta_key ?>"/>
<meta name="description" content="<?= $og_details ?>" />
<meta name="author" content="<?= $siteoptions['web_author']?>">
<meta name="publisher" content="<?= $siteoptions['web_publisher']?>">
<meta property="article:publisher" content="https://www.facebook.com/news24bdonline"/>
<meta property="fb:app_id" content="250655873728256"/>

<!-- meta facebook -->
<meta property="og:locale" content="en_US"/>
<meta property="og:title" content="<?= $og_title ?>"/>
<meta property="og:type" content="WEBSITE"/>
<meta property="og:site_name" content="<?= $og_site_name ?>"/>
<meta property="og:url" content="<?= $og_link ?>"/>
<meta property="og:description" content="<?= $og_details?>" />
<meta property="og:image" content="<?= $og_image ?>" />
<meta property="og:image:url" content="<?= $og_image ?>"/>
<meta property="og:image:secure_url" content="<?= $og_image ?>"/>

<!-- meta twitter -->
<meta name=twitter:card content=summary_large_image />
<meta name=twitter:site content="@site" />
<meta name=twitter:creator content="@site" />
<meta name=twitter:url content="<?= $og_link ?>" />
<meta name=twitter:title content="<?= $og_title ?>" />
<meta name=twitter:description content="<?= $og_details?>" />
<meta name=twitter:image content="<?= $og_image ?>" />

