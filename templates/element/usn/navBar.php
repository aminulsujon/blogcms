<div class="header--navbar navbar" data-trigger="sticky" style="background:#fff">
                <div class="container">
                    <div class="header--navbar-inner clearfix" style="display: flex;justify-content: space-between;width: 100%;">
                        <div class="navbar-header" style="justify-content: left;display: flex;">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <a href="<?= $siteoptions['web_url']?>" class="logo-mobile shown-xxs" style="flex: 1;text-align: center;padding-top: 0;">

                                <img style="padding:0 10px" src="<?= $siteoptions['web_resource'].'/'.$siteoptions['web_layout']?>/img/logo.png?v=0.0.0" alt="Logo">

                                <span class="hidden">Logo</span>

                            </a>

                        <div id="headerNav" class="navbar-collapse collapse float--left">
                            <!-- Header Menu Links Start -->
                            <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                                

                                <li class="">
                                    <a href="<?= $siteoptions['web_url'] ?>">প্রচ্ছদ</a>
                                </li>
                                <?php
        if(!empty($tags)){
            $tags = json_decode($tags,true);
            foreach($tags as $tag){
                if(!empty($tag['pagelink'])){
                    $href = $tag['pagelink'];
                }else{
                    $href = $siteoptions['web_url'].'/category/'.$tag['slug'];
                }
                echo '<li class="dropdown megamenu filter">';
                    echo '<a class="dropdown-toggle" href="'.$href.'">'.$tag['title'].' <i class="fa flm fa-angle-down hidden"></i></a>';
                    if(!empty($tag['children'])){
                        echo '<ul class="dropdown-menu">';
                            ?>
                            <?php
                            foreach($tag['children'] as $children){
                                if(!empty($children['pagelink'])){
                                    $href = $children['pagelink'];
                                }else{
                                    $href = $siteoptions['web_url'].'/category/'.$children['slug'];
                                }
                                ?>
                                <li>
                                    <a href="<?= $href ?>"><?= $children['title']?></a>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            // foreach($tag['children'] as $children){
                            //     echo '<li>';
                            //     echo '<a class="sub-menu-link" href="'.$children['slug'].'">'.$children['title'].'</a>';
                            //     if(!empty($children['children'])){
                            //         echo '<ul class="sub-menu-child">';
                            //         foreach($children['children'] as $child_children){
                            //             echo '<li>';
                            //             echo '<a class="sub-menu-child-link" href="'.$child_children['slug'].'">'.$child_children['title'].'</a>';
                            //             echo '<li>';
                            //         }
                            //         echo '</ul>';
                            //     }
                            //     echo '</li>';
                            // }
                        echo '</ul>';
                    }
                echo '</li>';
            }
        }
        ?>
        
    </ul>
</div>

<?= $this->Form->create(null,['url'=>['controller'=>'pages','action'=>'search'],'class'=>'header--search-form float--right']) ?>
<input type="text" name="txtSearch" required="required" placeholder="সার্চ..." class="header--search-control form-control">
<button class="header--search-btn btn mp-ex">
<i class="header--search-icon fa fa-search" style="font-size: 1.4em;"></i>
</button>
<?= $this->Form->end() ?>


</div>
</div>
</div>
<!-- Header Navbar End -->