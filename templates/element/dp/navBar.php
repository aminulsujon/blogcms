<nav class="navbar navbar-expand-lg sticky-top shadow-sm navigator-extra">
    <div class="container">
        <button class="navbar-toggler collapsed m-margin-reducer-left-14" type="button" data-toggle="collapse" data-target="#main-nav-1" aria-controls="main-nav-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            <span class="sr-only">News</span>
        </button>
        <div class="navbar-brand align-items-center d-flex d-lg-none mr-0">
            <a title="<?= $siteoptions['web_name']?>" href="<?= $siteoptions['web_url'] ?>">
                <img src="<?= $siteoptions['web_resource'] ?>/logo.png" alt="<?= $siteoptions['web_name']?>" width="1345" height="192" />
            </a>
        </div>
        <button type="button" class="btn btn-link d-flex d-lg-none" data-target="slide-down-m" aria-label="Search" style="margin-right: -14px;">
            <i class="fa fa-search" style="font-size: 20px;"></i>
        </button>
        <div class="navbar-collapse collapse" id="main-nav-1">
            <div style="width: 99%">
            <ul class="navbar-nav m-auto d-none d-lg-flex d-menu-items justify-content-center">
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>" class="nav-link">প্রচ্ছদ</a>
                </li>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/latest-news" class="nav-link">সর্বশেষ</a>
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
                        if(!empty($tag['children'])){
                            $firstLiCls = "nav-item dropdown dropdown-toggle";
                            $firstLiStyle = "display: flex; color: #FFF; align-items: center;";
                        }else{
                            $firstLiCls = "nav-item";
                            $firstLiStyle = "";
                        }
                        ?>
                        <li class="<?= $firstLiCls?>">
                            <a title="<?= $tag['title']?>" href="<?= $href ?>" class="nav-link"><?= $tag['title']?></a>
                            <?php
                            if(!empty($tag['children'])){
                                ?><div class="dropdown-menu single-dropdown s-dr-menu m-0" aria-labelledby="navbarDropdown">
                                <?php
                                foreach($tag['children'] as $children){
                                    if(!empty($children['pagelink'])){
                                        $href = $children['pagelink'];
                                    }else{
                                        $href = $siteoptions['web_url'].'/category/'.$children['slug'];
                                    }
                                    ?>
                                    <a title="<?= $children['title']?>" class="dropdown-item" href="<?= $href ?>" style="padding: 5px 0;"><?= $children['title']?></a>
                                    <?php
                                }
                                ?>
                                </div><?php
                            }
                            ?>
                        </li>
                        <?php
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
                                            <a title="<?= $children['title']?>" href="<?= $href ?>"><?= $children['title']?></a>
                                        </li>
                                        <?php
                                    }
                                echo '</ul>';
                            }
                        echo '</li>';
                    }
                }
                ?>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/national" class="nav-link">জাতীয়</a>
                </li>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/politics" class="nav-link">রাজনীতি</a>
                </li>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/economy" class="nav-link">অর্থনীতি</a>
                </li>
                <li class="nav-item dropdown dropdown-toggle" style="display: flex; color: #FFF; align-items: center;">
                <a title="" href="<?= $siteoptions['web_url'] ?>/country" class="nav-link">সারাদেশ</a>
                <div class="dropdown-menu single-dropdown s-dr-menu m-0" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="<?= $siteoptions['web_url'] ?>/country-map" style="padding: 5px 0;">জেলার খবর</a></div>
                </li>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/international" class="nav-link">আন্তর্জাতিক</a>
                </li>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/sports" class="nav-link">খেলা</a>
                </li>
                <li class="nav-item">
                <a title="" href="<?= $siteoptions['web_url'] ?>/entertainment" class="nav-link">বিনোদন</a>
                </li>
                <li class="nav-item ">
                <a title="" href="<?= $siteoptions['web_url'] ?>/health" class="nav-link">স্বাস্থ্য</a>
                </li>
                <li class="nav-item dropdown dropdown-toggle" style="display: flex; color: #FFF; align-items: center;">
                    <a title="" href="#" class="nav-link">ফিচার</a>
                    <div class="dropdown-menu single-dropdown s-dr-menu m-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= $siteoptions['web_url'] ?>/lifestyle" style="padding: 5px 0;">লাইফস্টাইল</a>
                        <a class="dropdown-item" href="<?= $siteoptions['web_url'] ?>/technology" style="padding: 5px 0;">তথ্যপ্রযুক্তি</a>
                        <a class="dropdown-item" href="<?= $siteoptions['web_url'] ?>/tourism" style="padding: 5px 0;">ট্যুরিজম</a>
                        <a class="dropdown-item" href="<?= $siteoptions['web_url'] ?>/study" style="padding: 5px 0;">পড়াশোনা</a>
                    </div>
                </li>
                <li class="nav-item hidden-item-lowerend">
                <a title="" href="<?= $siteoptions['web_url'] ?>/education" class="nav-link">শিক্ষা</a>
                </li>
                <li class="nav-item hidden-item-lowerend">
                <a title="" href="<?= $siteoptions['web_url'] ?>/jobs-career" class="nav-link">জবস</a>
                </li>
                <li class="nav-item position-static d-flex">
                    <button class="navbar-toggler collapsed nav-link d-flex align-items-center" aria-expanded="false" type="button" data-toggle="collapse" data-target="#nav-items-2">
                        <div class="button-bars">
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </div>
                        <span class="button-label">অন্যান্য</span>
                    </button>
                    <div class="dropdown-menu w-100 top-auto shadow border-0 rounded-0 nav-collapse collapse m-0" id="nav-items-2">
                        <div class="container">
                            <div class="row w-100 menu-items-others">
                                
                                <div class="col-sm-2 d-none">
                                <a href="<?= $siteoptions['web_url'] ?>/health">স্বাস্থ্য</a>
                                </div>
                                <div class="col-sm-2 show-higherend">
                                <a href="<?= $siteoptions['web_url'] ?>/education">শিক্ষা</a>
                                </div>
                                <div class="col-sm-2 show-higherend">
                                <a href="<?= $siteoptions['web_url'] ?>/jobs-career">জবস</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/probash">প্রবাস</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/opinion">মতামত</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/religion">ধর্ম</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/children-post">ছোটদের পোস্ট</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/campus">ক্যাম্পাস</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/law-courts">আইন-আদালত</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/literature">সাহিত্য</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/agriculture-and-nature">কৃষি ও প্রকৃতি</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/aviation">এভিয়েশন</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/exclusive">এক্সক্লুসিভ</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/mass-media">গণমাধ্যম</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="<?= $siteoptions['web_url'] ?>/unicode-to-bijoy-converter">কনভার্টার</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item position-static d-flex">
                <button type="button" class="btn btn-link" data-target="slide-down" aria-label="Search"><i class="fa fa-search"></i>
                </button>
                </li>
            </ul>
            </div>
            <div class="d-flex d-lg-none" style="position: fixed; padding: 1rem; background: #f5f5f5; width: 100%; color: #FFF; justify-content:space-between">
                <button class="navbar-toggler m-margin-reducer-left-14 text-white" type="button" data-toggle="collapse" data-target="#main-nav-1" aria-controls="main-nav-1" aria-expanded="true" aria-label="Toggle navigation" style=" ">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                    <span class="sr-only">NB</span>
                </button>
            </div>
        </div>
    </div>
    <form class="search-wrapper needs-validation" style="display: none;" data-target="slide-content" action="<?= $siteoptions['web_url'] ?>/search" method="get">
        <div class="container m-pl-0 m-pr-0">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" autocomplete="off" placeholder="অনুসন্ধান করুন" required />
                    <div class="input-group-append search-action">
                        <button type="submit" class="btn btn-dark"><i style="color: white !important;" class="fa fa-search"></i></button>
                        <button type="button" class="btn btn-light m-margin-reducer-right-14" data-target="slide-up">
                        <i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</nav>
