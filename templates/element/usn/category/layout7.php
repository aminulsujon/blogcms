<?php
if(!empty($tag['products'])){
    $i=1;
    //echo '<div class="row">';
    foreach($tag['products'] as $product){
        if($i==1){
            $img_path = "medium";
            $post_title = " post--title-larger ";
            $post_layout = " post--layout-1 ";
            $cls_topper = "";
        }elseif($i==2 || $i==3 || $i==4 || $i==9){
            $img_path = "small";
            $post_title = " post--title-larger ";
            $post_layout = " post--layout-1 ";
            $cls_topper = "";
        }else{
            $img_path = "thumb";
            $post_title = " post--title-large ";
            $post_layout = " post--layout-3 ";
            $cls_topper = " cls-topper ";
        }
        if($i==3 || $i==9){$cls_topper = " ";}
        ${"post_display_" . $i} = '<!-- Post Item Start -->
        <div class="post--item '.$post_layout.$post_title.$cls_topper.'">
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
<?= $this->element('adsense728x90')?>
<div class="main--content">
    <!-- Post Items Start -->
    <div class="post--items post--items-1 pd--30-0">
        <!-- Post Items Title Start -->
        <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>
                
        <div class="row gutter--15">
            <div class="col-md-3">
                <?php echo !empty($post_display_4) ? $post_display_4 : '';?>
                <?php echo !empty($post_display_5) ? $post_display_5 : '';?>
                <?php echo !empty($post_display_6) ? $post_display_6 : '';?>
                <?php echo !empty($post_display_7) ? $post_display_7 : '';?>
                <?php echo !empty($post_display_8) ? $post_display_8 : '';?>
            </div>

            <div class="col-md-6">
                <div class="row"><div class="col-md-12"><?php echo !empty($post_display_1) ? $post_display_1 : '';?></div></div>
                <div class="row">
                    <div class="col-md-6"><?php echo !empty($post_display_2) ? $post_display_2 : '';?></div>
                    <div class="col-md-6"><?php echo !empty($post_display_3) ? $post_display_3 : '';?></div>
                </div>
            </div>

            <div class="col-md-3">
                <?php echo !empty($post_display_9) ? $post_display_9 : '';?>
                <?php echo !empty($post_display_10) ? $post_display_10 : '';?>
                <?php echo !empty($post_display_11) ? $post_display_11 : '';?>
                <?php echo !empty($post_display_12) ? $post_display_12 : '';?>
                <?php echo !empty($post_display_13) ? $post_display_13 : '';?>
            </div>
        </div>
    </div>
    <!-- Post Items End -->
</div>
<!-- Layout 3 End -->

</div>
        </div>