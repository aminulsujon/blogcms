<!-- L5/5 -->
<div class="main-content--section pbottom--30">
<div class="container">
<div class="main--content">
<div class="row">

<div class="col-md-12 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <?= $this->element('usn/postTitle',['txt'=>$tag['title'],'txt_slug'=>$tag['slug']])?>

    <!-- Post Items Start -->
    <div class="post--items post--items-1" data-ajax-content="outer">
        <ul class="nav row gutter--15" data-ajax-content="inner">
            
        <?php
        if(!empty($tag['products'])){
            $i = 1;
            foreach($tag['products'] as $product){
                if($i<3){
                    $cls_gridder = "col-xs-12";
                    $post_layout = " post--layout-2 ";
                    $img_path = "small";
                    $post_title = " post--title-larger ";
                    $cls_topper = " ";
                }else{
                    $cls_gridder = "col-xs-6"; 
                    $post_layout = " post--layout-3 ";    
                    $img_path = "thumb";   
                    $post_title = " post--title-large ";    
                    $cls_topper = " cls-topper ";       
                }
                if($i==3 || $i==9){$cls_topper = " ";}
                ${"post_display_" . $i} = '<!-- Post Item Start -->
                    <div class="post--item '.$post_layout.$cls_topper.'">
                        <div class="post--img">
                            <a href="'.$siteoptions['web_url'].'/news/'.$product['id'].'" class="thumb">
                            <figure>
                                <img src="'.$siteoptions['web_resource'] .'/img/products/'.h($product['uploads'][0]['imgname']) .'-'.$img_path.'-'.h($product['uploads'][0]['id']) .'.jpg" alt="'.$product['uploads'][0]['imgname'].'" title="'.$product['uploads'][0]['caption'].'">
                                <figurecaption class="hidden">'.$product['uploads'][0]['caption'] .'</figurecaption>
                            </figure>
                            </a>
                            <div class="post--info">
                                <div class="title">
                                    <h3 class="h4"><a href="'.$siteoptions['web_url'].'/news/'.$product['id'].'" class="btn-link">'.$product['title'] .'</a></h3>
                                </div>
                            </div>
                        </div>
                    </div><!-- Post Item End -->
                    ';
                
                //if($i==5){break;}
                $i++;
            }
        }
        ?>

            <li class="col-md-4">
                <?php echo !empty($post_display_1) ? $post_display_1 : '';?>
                <?php echo !empty($post_display_2) ? $post_display_2 : '';?>
            </li>
            <li class="col-md-4">
                <?php echo !empty($post_display_3) ? $post_display_3 : '';?>
                <?php echo !empty($post_display_4) ? $post_display_4 : '';?>
                <?php echo !empty($post_display_5) ? $post_display_5 : '';?>
                <?php echo !empty($post_display_6) ? $post_display_6 : '';?>
                <?php echo !empty($post_display_7) ? $post_display_7 : '';?>
                <?php echo !empty($post_display_8) ? $post_display_8 : '';?>
            </li>
            <li class="col-md-4">
                <?php echo !empty($post_display_9) ? $post_display_9 : '';?>
                <?php echo !empty($post_display_10) ? $post_display_10 : '';?>
                <?php echo !empty($post_display_11) ? $post_display_11 : '';?>
                <?php echo !empty($post_display_12) ? $post_display_12 : '';?>
                <?php echo !empty($post_display_13) ? $post_display_13 : '';?>
                <?php echo !empty($post_display_14) ? $post_display_14 : '';?>
            </li>
        </ul>

        <!-- Preloader Start -->
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
        <!-- Preloader End -->
    </div>
    <!-- Post Items End -->
</div>


</div>
</div>
</div>
</div>