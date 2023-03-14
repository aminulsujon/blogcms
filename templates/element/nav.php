<nav id="top" class="navbar navbar-expand-md navbar-white mb-2 pb-0 pt-1">
              
    <button class="navbar-toggler" style="" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="color-yellow" style="font-size:2rem;line-height:.5">&equiv;</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link color-theme" href="<?= $head_url?>">প্রচ্ছদ <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item d-block d-sm-none">
            <a class="nav-link color-theme" href="<?= $head_url?>archive">সর্বশেষ</a>
        </li>
        <li class="nav-item d-block d-sm-none">
        <a class="nav-link color-theme" href="<?= $head_url?>photo">ছবি</a>
        </li>
        <li class="nav-item d-block d-sm-none">
        <a class="nav-link color-theme" href="<?= $head_url?>video">ভিডিও</a>
        </li>
        
        <?php
        if(!empty($tags)){
            $menu_list = '';
            $tags = json_decode($tags,true);
            foreach ($tags as $tag) {
                if(!empty($tag['isspecial']) && $tag['isspecial'] > 0 ){
                    ?>
            <li class="nav-item position-relative">
                <a class="nav-link color-theme" href="<?= $head_url?>topic/<?= $tag['slug']?>"><?= $tag['title']?></a>
                <?php 
                if(!empty($tag['child_tags'])){
                ?>
                <ul class="ml-0 pl-0 bg-ash zindex-100 position-absolute">
                    <?php 
                    foreach ($tag['child_tags'] as $children) {
                    ?>
                    <a class="nav-link color-theme border-top" href="<?= $head_url?>topic/<?= $children['slug']?>"><?= $children['title']?></a>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                }
                ?>
            </li><?php
                }else{
                    $menu_list .= '<a class="mm" href="'.$head_url.'topic/'.$tag['slug'].'">'.$tag['title'].'</a>';
                    ?>
            <li class="nav-item position-relative d-block d-sm-none">
                <a class="nav-link color-theme" href="<?= $head_url?>topic/<?= $tag['slug']?>"><?= $tag['title']?></a>
                <?php 
                if(!empty($tag['child_tags'])){
                ?>
                <ul class="ml-0 pl-0 bg-ash zindex-100 position-absolute">
                    <?php 
                    foreach ($tag['child_tags'] as $children) {
                    ?>
                    <a class="nav-link color-theme border-top" href="<?= $head_url?>topic/<?= $children['slug']?>"><?= $children['title']?></a>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                }
                ?>
            </li><?php
                }
            
            }
        }
        ?>   
        <li class="nav-item d-none d-sm-block">
        <a onclick="showMenuAll()" class="nav-link color-theme2" href="javascript:void(0)">আরও</a>
        </li>
    </ul>
    
    </div>
</nav>

<div class="mmc d-none d-sm-block" style="display:none !important">
<?php 
echo $menu_list;
?>
</div>

<style>
.mmc {
    display:none;
    margin-bottom: 20px;
    padding:.5rem 1rem;
}
.mm{padding: 5px 10px;}
</style>

<script>
function showMenuAll(){
    $(".mmc").show();
}
</script>