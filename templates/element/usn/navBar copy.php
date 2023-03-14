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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">প্রচ্ছদ</a>
                                </li>
                                <?php
        if(!empty($tags)){
            $tags = json_decode($tags,true);
            foreach($tags as $tag){
                echo '<li class="dropdown megamenu filter">';
                    echo '<a class="dropdown-toggle" href="'.$tag['slug'].'">'.$tag['title'].' <i class="fa flm fa-angle-down"></i></a>';
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
        <!-- <li class="dropdown megamenu filter">
            <a href="world-news.html" class="dropdown-toggle" data-toggle="dropdown">Worlds News<i class="fa flm fa-angle-down"></i></a>

            <ul class="dropdown-menu">
                <li>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="megamenu--filter">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#" data-action="load_cat_posts" data-cat="all">All<i class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-action="load_cat_posts" data-cat="latin-america">Latitn America<i class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-action="load_cat_posts" data-cat="africa">Africa<i class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-action="load_cat_posts" data-cat="middle-east">Middle East<i class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-action="load_cat_posts" data-cat="europe">Europe<i class="fa fa-angle-right"></i></a>
                                    </li>
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
            </ul>
        </li>
        <li><a href="national.html">National</a></li>
        <li><a href="financial.html">Financial</a></li>
        <li><a href="entertainment.html">Entertainment</a></li>
        <li><a href="lifestyle.html">Lifestyle</a></li>
        <li><a href="technology.html">Technology</a></li>
        <li class="dropdown megamenu posts">
            <a href="travel.html" class="dropdown-toggle" data-toggle="dropdown">Travel<i class="fa flm fa-angle-down"></i></a>

            <ul class="dropdown-menu">
                <li>
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

                        <a href="travel.html" class="all" title="View All" data-toggle="tooltip">
                            <i class="fa fa-th-large"></i>
                        </a>
                        <a href="#" class="next" data-ajax-action="load_next_posts">
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="sports.html">Sports</a></li>
        <li class="dropdown megamenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catagory<i class="fa flm fa-angle-down"></i></a>

            <ul class="dropdown-menu">
                <li class="dropdown">
                    <a href="#">World’s News</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">US &amp; Canada</a></li>
                        <li><a href="#">Europe</a></li>
                        <li><a href="#">Africa</a></li>
                        <li><a href="#">Asia</a></li>
                        <li><a href="#">Middle East</a></li>
                        <li><a href="#">Asia Pacific</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Documantation</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Featured Documantation</a></li>
                        <li><a href="#">People &amp; Power</a></li>
                        <li><a href="#">Rebel Education</a></li>
                        <li><a href="#">Rewind</a></li>
                        <li><a href="#">Fault Lines</a></li>
                        <li><a href="#">News 360 Degree World’s</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Sports</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Football</a></li>
                        <li><a href="#">Cricket</a></li>
                        <li><a href="#">Hocky</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Business</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">US Business</a></li>
                        <li><a href="#">Middle East Business</a></li>
                        <li><a href="#">Europe Business</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Education</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Africa Child Education</a></li>
                        <li><a href="#">Bangladeshi Education</a></li>
                        <li><a href="#">Middle East Education</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Humanities</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Help For Syrian Refugees</a></li>
                        <li><a href="#">Help For Afgan Children</a></li>
                        <li><a href="#">Help For African Children</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Movies</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Hollywood</a></li>
                        <li><a href="#">Dollywood</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Weather</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">North Pole</a></li>
                        <li><a href="#">South Pole</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Health</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Africa Poor Child Healt</a></li>
                        <li><a href="#">Fitness and Health</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Animals</a>

                    <ul class="dropdown-menu">
                        <li><a href="#">African Animals</a></li>
                        <li><a href="#">Australian Animals</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i class="fa flm fa-angle-down"></i></a>

            <ul class="dropdown-menu">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<i class="fa flm fa-angle-right"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="blog-v1.html">Blog 1</a></li>
                        <li><a href="blog-v2.html">Blog 2</a></li>
                        <li><a href="blog-v3.html">Blog 3</a></li>
                        <li><a href="archives-v1.html">Archives 1</a></li>
                        <li><a href="archives-v2.html">Archives 2</a></li>
                        <li><a href="archives-v3.html">Archives 3</a></li>
                        <li><a href="tag.html">Tag</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="author.html">Author</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News Single<i class="fa flm fa-angle-right"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="news-single-v1.html">News Single 1</a></li>
                        <li><a href="news-single-v2.html">News Single 2</a></li>
                        <li><a href="news-single-v3.html">News Single 3</a></li>
                        <li><a href="news-single-v4.html">News Single 4</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Widgets<i class="fa flm fa-angle-right"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="ad-widgets.html">Ad Widgets</a></li>
                        <li><a href="social-widgets.html">Social Widgets</a></li>
                        <li><a href="subscribe-widgets.html">Subscirbe Widgets</a></li>
                        <li><a href="post-widgets.html">Post Widgets</a></li>
                        <li><a href="poll-widgets.html">Poll Widgets</a></li>
                        <li><a href="search-widgets.html">Search Widgets</a></li>
                        <li><a href="links-widgets.html">Links Widgets</a></li>
                        <li><a href="tag-widgets.html">Tag Widgets</a></li>
                        <li><a href="profile-widgets.html">Profile Widgets</a></li>
                        <li><a href="cart-widgets.html">Cart Widgets</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contributors<i class="fa flm fa-angle-right"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="contributors.html">Contributors 1</a></li>
                        <li><a href="contributors-2.html">Contributors 2</a></li>
                        <li><a href="contributors-3.html">Contributors 3</a></li>
                        <li><a href="contributors-4.html">Contributors 4</a></li>
                    </ul>
                </li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="login.html">Login</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<i class="fa flm fa-angle-right"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="shop-1.html">Shop 1</a></li>
                        <li><a href="shop-2.html">Shop 2</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<i class="fa flm fa-angle-right"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="contact.html">Contact 1</a></li>
                        <li><a href="contact-2.html">Contact 2</a></li>
                    </ul>
                </li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="404.html">404</a></li>
            </ul>
        </li> -->
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