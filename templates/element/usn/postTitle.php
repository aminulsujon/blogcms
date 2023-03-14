<div class="post--items-title" data-ajax="tab">
    <h2 class="h4">
        <?php
        if(!empty($txt_slug)){
            echo '<a class="font-weight-bold" href="'.$siteoptions['web_url'].'/category/'.$txt_slug.'">'.$txt.'</a>';
        }else{
            echo $txt;
        }
        ?>
    </h2>
    <?php
    if(!empty($txt_slug)){
        
        ?>
        <div class="nav">
        <a href="<?= $siteoptions['web_url'].'/category/'.$txt_slug?>" class="ctg-more">
        আরও খবর <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
        <?php
       
    }
    ?>
    
</div>
<!-- Post Items Title End -->