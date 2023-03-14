<?php
if(!empty($tag['products'])){
    $i=1;
    //echo '<div class="row">';
    foreach($tag['products'] as $product){
        if($i==1){
            $img_path = "medium";
            $post_title = "post--title-larger";
        }else{
            $img_path = "small";
            $post_title = "post--title-large";
        }
        ${"post_display_" . $i} = '<!-- Post Item Start -->
        <div class="post--item post--layout-1 '.$post_title.'">
            <div class="post--img">
                <a href="'.$siteoptions['web_url'].'/news/'.$product['id'].'" class="thumb">
                <figure>
                    <img src="'.$siteoptions['web_resource'] .'/img/products/'.h($product['uploads'][0]['imgname']) .'-'.$img_path.'-'.h($product['uploads'][0]['id']) .'.jpg" alt="'.$product['uploads'][0]['imgname'].'" title="'.$product['uploads'][0]['caption'].'">
                    <figurecaption class="hidden">'.$product['uploads'][0]['caption'] .'</figurecaption>
                </figure>
                </a>
                <div class="post--info">
                    <ul class="nav meta">
                        <li class="hidden"><a href="#">Astaroth</a></li>
                        <li>'.$this->element('usn/dateLink',['created'=>$product['created']]).'</li>
                    </ul>
                    <div class="title">
                        <h3 class="h4"><a href="'.$siteoptions['web_url'].'/news/'.$product['id'].'" class="btn-link">'.$product['title'] .'</a></h3>
                    </div>
                </div>
            </div>
        </div><!-- Post Item End -->
        ';
        $i++;
    }
}
?>
<div class="main-content--section pbottom--30">
<div class="container">
<div class="main--content">
    <!-- Post Items Start -->
    <div class="post--items post--items-1 pd--30-0">
        <!-- Post Items Title Start -->
        <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>
                
        <div class="row gutter--15">
            <div class="col-md-3">
                <div class="row gutter--15">
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                        <?php echo !empty($post_display_2) ? $post_display_2 : '';?>
                    </div>
                    <div class="col-md-12 col-xs-6 hidden-xxs">
                        <?php echo !empty($post_display_3) ? $post_display_3 : '';?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <?php echo !empty($post_display_1) ? $post_display_1 : '';?>
            </div>

            <div class="col-md-3">
                <div class="row gutter--15">
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                        <?php echo !empty($post_display_4) ? $post_display_4 : '';?>
                    </div>
                    <div class="col-md-12 col-xs-6 hidden-xxs">
                        <?php echo !empty($post_display_5) ? $post_display_5 : '';?>
                    </div>
                </div>
            </div>

            <div class="col-md-3"><?php echo !empty($post_display_6) ? $post_display_6 : '';?></div>
            <div class="col-md-3"><?php echo !empty($post_display_7) ? $post_display_7 : '';?></div>
            <div class="col-md-3"><?php echo !empty($post_display_8) ? $post_display_8 : '';?></div>
            <div class="col-md-3"><?php echo !empty($post_display_9) ? $post_display_9 : '';?></div>

        </div>
    </div>
    <!-- Post Items End -->
</div>
<!-- Layout 3 End -->
<?= $this->element('adsense728x90')?>
</div>
</div>