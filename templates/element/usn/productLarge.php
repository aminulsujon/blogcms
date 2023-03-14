<?php
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
<div class="post--item post--title-larger">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
            <div class="post--img">
                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="thumb">
                <figure>
                    <img src="<?= $siteoptions['web_resource'] ?>/img/products/<?= $img_name ?>-small-<?= $img_id ?>.jpg" alt="<?= $img_name?>" title="<?= $img_caption?>">
                    <figurecaption class="hidden"><?= $img_caption?></figurecaption>
                </figure>
                </a>
                <a href="#" class="cat" style="display:none">Kids</a>
            </div>
        </div>

        <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
            <div class="post--info">
                <ul class="nav meta">
                    <li style="display:none"><a href="#">Reporter</a></li>
                    <li><?= $this->element('usn/dateLink',['created'=>$product['created']])?></li>
                </ul>

                <div class="title">
                    <h3 class="h4"><a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>" class="btn-link" style="font-weight:bold !important"><?= $product['title']?></a></h3>
                </div>
            </div>

            <div class="post--content">
                <p><?= preg_replace('~\\s+\\S+$~', "", substr(strip_tags($product['details']),0,300)) ?>...</p>
            </div>

            <div class="post--action">
                <a href="<?= $siteoptions['web_url']?>/news/<?= $product['id']?>">বিস্তারিত পড়ুন</a>
            </div>
        </div>
    </div>
</div>
<!-- Post Item End -->