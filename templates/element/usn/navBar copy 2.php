<div class="header--navbar navbar" data-trigger="sticky" style="background:#fff">
                <div class="container">
                    <div class="header--navbar-inner clearfix">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="headerNav" class="navbar-collapse collapse float--left">
                            <!-- Header Menu Links Start -->
                            <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                                

                                <li class="dropdown active">
                                    <a href="<?= $siteoptions['web_url'] ?>" class="dropdown-toggle" data-toggle="dropdown">প্রচ্ছদ</a>
                                </li>
                                <?php
        if(!empty($tags)){
            $tags = json_decode($tags,true);
            foreach($tags as $tag){
                if(!empty($tag['pagelink'])){
                    $href = $tag['pagelink'];
                }else{
                    $href = $siteoptions['web_url'].'/'.$tag['slug'];
                }
                echo '<li class="dropdown megamenu filter">';
                    echo '<a class="dropdown-toggle" href="'.$href.'">'.$tag['title'].' <i class="fa flm fa-angle-down hidden"></i></a>';
                    if(!empty($tag['children'])){
                        echo '<ul class="dropdown-menu">';
                            ?>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="megamenu--filter">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#" data-action="load_cat_posts" data-cat="all">All<i class="fa fa-angle-right"></i></a>
                                                </li>
                                                <?php
                                                foreach($tag['children'] as $children){
                                                    ?>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="<?= $children['slug']?>"><?= $children['title']?><i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="megamenu--posts" data-ajax-content="outer">
                                            <ul class="row" data-ajax-content="inner">
                                                <li class="col-md-3">
                                                    <div class="img">
                                                        <a href="news-single-v1.html" class="thumb">
                                                            <img src="<?= $siteoptions['web_layout']?>/img/megamenu-img/post-01.jpg" alt="">
                                                        </a>

                                                        <a href="#" class="cat">Beach</a>

                                                        <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                    </div>

                                                    <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                </li>

                                                <li class="col-md-3">
                                                    <div class="img">
                                                        <a href="news-single-v1.html" class="thumb">
                                                            <img src="<?= $siteoptions['web_layout']?>/img/megamenu-img/post-02.jpg" alt="">
                                                        </a>

                                                        <a href="#" class="cat">News</a>

                                                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    
                                                    <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                </li>

                                                <li class="col-md-3">
                                                    <div class="img">
                                                        <a href="news-single-v1.html" class="thumb">
                                                            <img src="<?= $siteoptions['web_layout']?>/img/megamenu-img/post-03.jpg" alt="">
                                                        </a>

                                                        <a href="#" class="cat">Ice Hiking</a>

                                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                    </div>
                                                    
                                                    <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                </li>

                                                <li class="col-md-3">
                                                    <div class="img">
                                                        <a href="news-single-v1.html" class="thumb">
                                                            <img src="<?= $siteoptions['web_layout']?>/img/megamenu-img/post-04.jpg" alt="">
                                                        </a>

                                                        <a href="#" class="cat">Mountain</a>

                                                        <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    
                                                    <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                </li>
                                            </ul>

                                            <div class="preloader bg--color-0--b" data-preloader="1">
                                                <div class="preloader--inner"></div>
                                            </div>
                                        </div>
                                        <div class="megamenu--pagination" data-ajax="tab">
                                            <a href="#" class="prev" data-ajax-action="load_prev_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <a href="world-news.html" class="all" title="View All" data-toggle="tooltip">
                                                <i class="fa fa-th-large"></i>
                                            </a>

                                            <a href="#" class="next" data-ajax-action="load_next_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
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

<form action="#" class="header--search-form float--right" data-form="validate">
    <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>
    <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
</form>
</div>
</div>
</div>
<!-- Header Navbar End -->