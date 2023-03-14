<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>

    <?= $this->element('meta')?>

    <!-- ==== Favicons ==== -->

    <link rel="icon" href="<?= $siteoptions['web_resource'] ?>/favicon.ico" type="image/ico">

    <!-- ==== Google Font ====
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700"> -->
    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/font-awesome.min.css">
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/bootstrap.min.css">
    <!-- ==== Bar Rating Plugin ==== -->

    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/fontawesome-stars-o.min.css">

    

    <!-- ==== Main Stylesheet ==== -->

    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/style.css">

    

    <!-- ==== Responsive Stylesheet ==== -->

    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/responsive-style.css">



    <!-- ==== Theme Color Stylesheet ==== -->

    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/colors/theme-color-1.css" id="changeColorScheme">

    

    <!-- ==== Custom Stylesheet ==== -->

    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/custom.css">



    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/owl.carousel.min.css?v=0.0.1">

    <link rel="stylesheet" href="<?= $siteoptions['web_resource']?>/newsbd/css/owl.theme.css">
    <?php
    if(!empty($siteoptions['web_header'])){
        echo $siteoptions['web_header'];
    }
    ?>
    
    <?php
if(!empty($siteoptions['web_gallery'])){
    $photo_color = $siteoptions['web_gallery'];
}else{
    $photo_color = "#000";
}

if(!empty($siteoptions['web_cook'])){
    $cook_color = $siteoptions['web_cook'];
}else{
    $cook_color = "#000";
}

if(!empty($siteoptions['web_exclusive'])){
    $ex_color = $siteoptions['web_exclusive'];
}else{
    $ex_color = "#000";
}

if(!empty($siteoptions['web_latest'])){
    $web_tas = $siteoptions['web_latest'];
}else{
    $web_tas = "#ddd";
}

if(!empty($siteoptions['web_latest_txt'])){
    $web_txt = $siteoptions['web_latest_txt'];
}else{
    $web_txt = "#ddd";
}

if(!empty($siteoptions['web_lead'])){
    $web_lead = $siteoptions['web_lead'];
}else{
    $web_lead = "#000";
}
if(!empty($siteoptions['web_ticker'])){
    $web_ticker = $siteoptions['web_ticker'];
}else{
    $web_ticker = "#000";
}

if(!empty($siteoptions['web_ticker_txt'])){
    $web_ticker_txt = $siteoptions['web_ticker_txt'];
}else{
    $web_ticker_txt = "#fff";
}
?>


<style>

    @font-face{

        font-family:solaimanipi;

        src:url(<?= $siteoptions['web_resource']?>/SolaimanLipi.eot);

        src:url(<?= $siteoptions['web_resource']?>/SolaimanLipi.eot) format('embedded-opentype'),

            url(<?= $siteoptions['web_resource']?>/SolaimanLipi.ttf) format('truetype')

    }

    body{font-family: solaimanipi;font-size:20px;line-height:26px;}

    p{text-align:justify;margin-bottom: 1rem;color:#121212}

    /* pre, .cake-error{display:none} */
    .header--navbar .navbar-toggle {background-color: #fff !important;}
    .navbar-toggle {border: 0 !important;padding: 9px 10px 9px 0px;}
    .header--style-6 .navbar-toggle.collapsed .icon-bar {background-color: #000 !important;}

    .header--navbar-inner {padding: 0 !important;}
    .navbar-toggle .icon-bar {height: 3px !important}
    .header--search-form .btn {padding: 22px 0 15px 0 !important}

    .text-white{color:#fff}

    .header--mainbar{background:#fff}

    .header--menu-links > .megamenu{position:relative}

    .header--menu-links > .megamenu > .dropdown-menu {

        position: absolute !important;

        left: -100%;

        padding: 3px 10px 5px;

        width: 200px;

        text-align: center;

    }

    .header--menu-links a{color:#000 !important}

    a, .header--menu-links,.header--date-link {

        font-size: 20px !important;font-weight:normal !important

    }
    
    

    .post--info{padding-top:5px}
    
    .news--ticker,
    .news-updates--list:before, .news-updates--list:after,
    .news--ticker .title{
    background: <?= $web_ticker?>;
    background-color: <?= $web_ticker?>;
}
.news-updates--list .nav li .h3 a {
   color:  <?= $web_ticker_txt?>;
}
.news--ticker .title h2 {
   color:  <?= $web_ticker_txt?>;
}
.news-updates--list:before, .news-updates--list:after{width: 0;}



.news-updates--list {

    background-color: rgba(0,0,0,0);
 
}
    .news--ticker .title h2 {font-size: 20px !important;}

    .post--items-title .h4 {font-size: 20px !important;}

    .widget--title .h4 {font-size: 20px !important;}

    .post--items-title a{font-weight:bold !important;}



    .news--ticker a{color:#d4d4d4;}

    .box-heading .item a{color:#fff;font-weight:normal}

    /* .owl-carousel .item a {

        margin: 0;

        color: #222;

        font-size: 14px;

        line-height: 24px;

        font-weight: 700;

    } */

    .owl-carousel .item a img{margin-bottom:10px}

    .section-wrapper-carosel .owl-carousel .owl-nav{display:none}

    .owl-carousel .owl-nav{position:absolute;top:-45px;right:0}

    .owl-carousel .owl-nav button{width:25px;height:26px;border:1px solid #ddd !important}

    .owl-carousel .owl-nav button:hover{background:#da0000 !important;border:1px solid #b40000 !important;color:#fff !important}

    .owl-carousel .owl-nav button:first-child{margin-right:10px}



    .owl-carousel-headingbox{position:relative;background: #000}

    .owl-carousel-headingbox .owl-nav button {width: 50px;height: 50px;border: 1px solid #ddd !important;position: absolute;top: 40%;font-size: 30px !important;background: #fff !important;border-radius: 50%;}

    .owl-carousel-headingbox .owl-nav button:first-child{left:0;}

    .owl-carousel-headingbox .owl-nav button:last-child{right:0}

    .owl-carousel-3{position:relative;background: #000;padding-bottom: 3rem}

    .owl-carousel-3 .owl-nav button {width: 50px;height: 50px;border: 1px solid #ddd !important;position: absolute;top: 30%;font-size: 30px !important;background: #fff !important;border-radius: 50%;}

    .owl-carousel-3 .owl-nav button:first-child{left:0;}

    .owl-carousel-3 .owl-nav button:last-child{right:0}
    .owl-carousel-3 figurecaption{color:#fff;padding:20px;display:block}
    .owl-carousel-3 .owl-dots{display:none}


    .mt--4{margin-top:4rem}
    .container-iframe {

        position: relative;

        overflow: hidden;

        width: 100%;

        padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */

    }



    /* Then style the iframe to fit in the container div with full height and width */

    .responsive-iframe {

        position: absolute;

        top: 0;

        left: 0;

        bottom: 0;

        right: 0;

        width: 100%;

        height: 100%;

        border:none

    }



    .cls-topper{
        padding-top: 15px;
        /* padding-bottom: 15px; */
        border-top: 1px solid #eee;

    }

    .header--style-6 .header--navbar {

        border-top: 1px solid rgb(226, 226, 226) !important;

    }

    .widgetfb {
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
        overflow: hidden;
        width: 360px;
        height: 160px;
        margin: 0 auto
    }
    .br-bottom {
        border-bottom: 1px solid #e7e7e7;
    }
    .bg-black{background:#000}
    .bg-white{background:#fff}
    .dflex{display:flex}
    .text-black{color:black !important}
    .text-white{color:white !important}
    .ctg-more{color:#555;font-weight:normal}
    .ctg-more:hover{color:#da0000}
    #replaced{margin-top:10px;border-top: 1px solid #eee}

    .logo-mobile{display:none}
    .m_s_l{float:right;}
    
    .table table{border-top:1px solid #ddd;border-left:1px solid #ddd;width:100%;table-layout: fixed ;}
    .table table td{
        
    }
    .table tr td{border-right:1px solid #ddd;border-bottom:1px solid #ddd;padding:10px}
.box-heading .post--item .post--info .title .h4{
    padding: 0 20px;
}
    @media screen and (max-width: 767px){
        .m-ranna-first{padding-right:20px}
        .logo-mobile{width:150px;margin-left:20px;padding: 6px 0;}
        .shown-xxs{display: inline-block !important;}
        .m-mb-c{margin-bottom:15px;}
        .m_s_l{float:none;}
        .ranna{padding-left:20px}
        .owl-carousel-headingbox{padding-bottom: 0 !important;}
    }
    @media (min-width: 768px){

        .navbar-collapse.collapse {width:95%}

    }

    @media screen and (max-width: 991px){

        .header--menu-links > .megamenu.filter > .dropdown-menu{

            display: block;

        }

        .dropdown-menu {

            left: 0 !important;

            text-align: left !important;

        }

    }

    @media screen and (max-width: 480px){
        .footer--copyright {text-align: left !important;}
        .footer--copyright .links > li > a {line-height: 25px !important}
    }
    
    .web_txt{color: <?= $web_txt?> !important;}
    .web_txt a{color: <?= $web_txt?> !important;}
    .web_tas{background: <?= $web_tas?> !important;}
    .web_exclusive{background: <?= $ex_color?>;}
    .web_cook{background: <?= $cook_color?>;}
    
    .owl-carousel-3{position:relative;background: <?= $photo_color?>;padding-bottom: 3rem}
    .owl-carousel-headingbox{background: <?= $web_lead ?> !important}
    

</style>

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

<?php
date_default_timezone_set('Asia/Dhaka');
$str_date = date('d');

$str_year = date('Y');

$en = array(1,2,3,4,5,6,7,8,9,0);

$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');

$str_date = str_replace($en, $bn, $str_date);

$str_year = str_replace($en, $bn, $str_year);



$str_month = date('M');

$en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );

$en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );

$bn = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );

// $str = str_replace( $en, $bn, $str );

$str_month = str_replace( $en_short, $bn, $str_month );



$str_day = date('D');

$en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');

$en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');

$bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');

$bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');

// $str = str_replace( $en, $bn, $str );

$str_day = str_replace( $en_short, $bn, $str_day );



// $en = array( 'am', 'pm' );

// $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );

// $str = str_replace( $en, $bn, $str );

?>

    <!-- Wrapper Start -->

    <div class="wrapper">

        <!-- Header Section Start -->

        <header class="header--section header--style-6">

            <!-- Header Topbar Start -->

            <div class="header--topbar">

                <div class="container">

                    <div class="float--left float--xs-none text-xs-center">

                        <!-- Header Topbar Info Start -->

                        <ul class="header--topbar-info nav header--date-link">

                            <li><i class="fa fm fa-map-marker"></i> ঢাকা</li>

                            <li><i class="fa fm fa-calendar"></i> <?= $str_day?>, <?= $str_date.' '.$str_month.' '.$str_year?></li>

                            <li class="hidden-xs"><a href="<?= $siteoptions['web_url']?>/converter">কনভার্টার</a></li>
                            <li class="hidden-xs"><a href="<?= $siteoptions['web_url']?>/archives">আর্কাইভ</a></li>
                            <!-- SET BANGLA FULL DATE WITH DAY https://gist.github.com/sdn-oronyo/02181f1dc4e8c3ef0a9fec1cb9f11130 -->

                        </ul>

                        <!-- Header Topbar Info End -->

                    </div>



                    <div class="float--right float--xs-none text-xs-center">

                        <!-- Header Topbar Social Start -->

                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">

                            <?php

                            if(!empty($siteoptions['web_facebook'])){echo '<li><a href="'.$siteoptions['web_facebook'].'" target="_blank"><i class="fa fa-facebook"></i></a></li>';}

                            if(!empty($siteoptions['web_twitter'])){echo '<li><a href="'.$siteoptions['web_twitter'].'" target="_blank"><i class="fa fa-twitter"></i></a></li>';}

                            if(!empty($siteoptions['web_youtube'])){echo '<li><a href="'.$siteoptions['web_youtube'].'" target="_blank"><i class="fa fa-youtube-play"></i></a></li>';}

                            if(!empty($siteoptions['web_linkedin'])){echo '<li><a href="'.$siteoptions['web_linkedin'].'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';}

                            if(!empty($siteoptions['web_googlenews'])){echo '<li><a href="'.$siteoptions['web_googlenews'].'" target="_blank"><i class="fa fa-google"></i></a></li>';}

                            if(!empty($siteoptions['web_rssfeed'])){echo '<li><a href="'.$siteoptions['web_rssfeed'].'" target="_blank"><i class="fa fa-rss"></i></a></li>';}

                            ?>

                        </ul>

                        <!-- Header Topbar Social End -->

                    </div>

                </div>

            </div>

            <!-- Header Topbar End -->



            <!-- Header Mainbar Start -->

            <div class="header--mainbar hidden-xs">

                <div class="container">

                    <!-- Header Logo Start -->

                    <div class="header--logo float--left float--sm-none text-sm-center">

                        <h1 class="h1">

                            <a href="<?= $siteoptions['web_url']?>" class="btn-link" style="background:#fff">

                                <img width="350" src="<?= $siteoptions['web_resource'].'/'.$siteoptions['web_layout']?>/img/logo.png" alt="News24bd Logo">

                                <span class="hidden">News24bd Logo</span>

                            </a>

                        </h1>

                    </div>

                    <!-- Header Logo End -->



                    <!-- Header Ad Start -->

                    <div class="header--ad float--right float--sm-none">
                        <?= $this->element('adheader') ?>
                    </div>

                    <!-- Header Ad End -->

                </div>

            </div>

            <!-- Header Mainbar End -->



            <!-- Header Navbar Start -->

            <?= $this->element('usn/navBar')?>

        </header>

        <!-- Header Section End -->





        <!-- News Ticker Start -->

        <?= $this->element('usn/scroll') ?>

        

            

            <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>

            

            

        

        <!-- Main Content Section End -->



        <!-- Footer Section Start -->

        <footer class="footer--section">

            <!-- Footer Widgets Start -->

            <!-- Footer Copyright Start -->

            <div class="footer--copyright bg--color-3">

                <div class="social--bg bg--color-1"></div>



                <div class="container">

                    <div class="pt-4 text-white">
<br>সম্পাদক: মোস্তফা কামাল<br>

                        নির্বাহী সম্পাদক: মাসুদ শায়ান<br>
উদয় টাওয়ার, ৫৭-৫৭এ গুলশান এভিনিউ. ঢাকা-১২১২<br>

                        মোবাইল: +৮৮০১৯৭৯-৭২৪৭৭৭<br>

                        ইমেইল: news24bdonlineportal@gmail.com<br>

                    </div>

                    <ul class="nav social float--right">

                        <?php

                        if(!empty($siteoptions['web_facebook'])){echo '<li><a href="'.$siteoptions['web_facebook'].'" target="_blank"><i class="fa fa-facebook"></i></a></li>';}

                        if(!empty($siteoptions['web_twitter'])){echo '<li><a href="'.$siteoptions['web_twitter'].'" target="_blank"><i class="fa fa-twitter"></i></a></li>';}

                        if(!empty($siteoptions['web_youtube'])){echo '<li><a href="'.$siteoptions['web_youtube'].'" target="_blank"><i class="fa fa-youtube-play"></i></a></li>';}

                        if(!empty($siteoptions['web_linkedin'])){echo '<li><a href="'.$siteoptions['web_linkedin'].'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';}

                        if(!empty($siteoptions['web_googlenews'])){echo '<li><a href="'.$siteoptions['web_googlenews'].'" target="_blank"><i class="fa fa-google"></i></a></li>';}

                        if(!empty($siteoptions['web_rssfeed'])){echo '<li><a href="'.$siteoptions['web_rssfeed'].'" target="_blank"><i class="fa fa-rss"></i></a></li>';}

                        ?>

                    </ul>



                    <ul class="nav links">

                        <li><a href="<?= $siteoptions['web_url']?>/page/about-us">আমাদের সম্পর্কে</a></li>
                        <li><a href="<?= $siteoptions['web_url']?>/page/advertisement">বিজ্ঞাপন</a></li>
                        <li><a href="<?= $siteoptions['web_url']?>/page/contact-us">যোগাযোগ</a></li>
                        <li><a href="<?= $siteoptions['web_url']?>/page/privacy-policy">গোপনীয়তা নীতি</a></li>
                        <li><a href="<?= $siteoptions['web_url']?>/page/terms-of-use">নীতিমালা</a></li>

                    </ul>

                    <p class="text float--left text-white shown-xxs" style="margin-top:0;padding-top:0"><?= $siteoptions['web_copyright']?></p>

                </div>

            </div>

            <!-- Footer Copyright End -->

        </footer>

        <!-- Footer Section End -->

    </div>

    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->

    <div id="backToTop">

        <a href="#"><i class="fa fa-angle-double-up"></i></a>

    </div>
    
    <div id="foxads">
  <div class='sticky-ads' id='sticky-ads'>
    <div class='sticky-ads-close'><button id="foxCloseBtn" onclick="closestickyAds();">X</button></div>
    
    <?php
    if(!empty($products_breaking)){
         $products_breaking = json_decode($products_breaking,true);
        // echo $products_breaking['title'];
        if(!empty($siteoptions['web_breaking_bg'])){$breaking_bg = $siteoptions['web_breaking_bg'];}else{$breaking_bg ="#b40000";}
        if(!empty($siteoptions['web_breaking_tx'])){$breaking_tx = $siteoptions['web_breaking_tx'];}else{$breaking_tx ="#fff";}
        if(!empty($products_breaking)){
            ?>
            <div class='sticky-ads-content'>
             <div class="container" style="background:<?= $breaking_bg ?>;padding:15px">
                <div class="post--item post--layout-3">
                    <div class="post--img">
                        <a href="https://www.news24bd.net/news/<?= $products_breaking['id'] ?>" class="thumb">
                        <figure>
                            <img src="https://www.news24bd.net/img/products/<?= $products_breaking['uploads'][0]['imgname'] ?>-small-<?= $products_breaking['uploads'][0]['id'] ?>.jpg" alt="<?= $products_breaking['title'] ?>" title="<?= $products_breaking['title'] ?>" data-rjs="2">
                            <figurecaption class="hidden"></figurecaption>
                        </figure>
                        </a>
                        <div class="post--info" style="padding-top:0">
                            <div class="title" style="text-align:left">
                                <p style="font-size:105%;margin-bottom:0;color:<?= $breaking_tx ?>">ব্রেকিং নিউজ </p>
                                <h3 class="h4"><a href="https://www.news24bd.net/news/<?= $products_breaking['id'] ?>" class="btn-link" style="color:<?= $breaking_tx ?>"><?= $products_breaking['title'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php
        }else{
        ?>
        <div class='sticky-ads-content'>
        <section class="text-center" style="margin-bottom: 20px;">
            <a href="https://www.meghnastarcables.com/" target="_blank">
            <picture>
                <source srcset="https://www.news24bd.net/img/contents/meghna-mobile-after-lead.jpg" media="(max-width: 600px)">
                <img src="https://www.news24bd.net/img/contents/meghna-top.jpg" alt="meghna" data-rjs="2">
            </picture>
            </a>
        </section>
        </div>
        <?php
    }
        
    }
    ?>
      
    </div>

  </div>

</div>

<!-- Welcome Advertise -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="position:relative;">
      <div class="modal-header" style="
        position: absolute;
        right: 0px;
        z-index: 10;
        background: #ddd;
        padding: 10px 10px 0px 10px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="text-align:center">
        <a href="https://www.meghnastarcables.com/" target="_blank">
        <picture>
            <source srcset="https://news24bd.net/img/contents/cablem.jpg" media="(max-width: 600px)">
            <img src="https://news24bd.net/img/contents/cabled.jpg" alt="meghna" data-rjs="2">
        </picture>
        </a>
      </div>
      
    </div>
  </div>
</div>

<style>
    #foxads {
  position: fixed;
  width: 100% !important;
  z-index: 9995;
  text-align: center;
  bottom: 0px;
}

.sticky-ads {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 90px;
  -webkit-transition: all 0.1s ease-in;
  transition: all 0.1s ease-in;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(247, 247, 247, 0.9);
  z-index: 9995;
}

.sticky-ads-close {
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 12px 0 0;
  position: absolute;
  right: 0;
  top: -25px;
  background-color: rgba(247, 247, 247, 0.9);

  cursor: pointer;
}

.sticky-ads .sticky-ads-content {
  overflow: hidden;
  display: block;
  position: relative;
  height: 90px;
  width: 100%;
  padding: 0px;
}
#foxCloseBtn {
  width: 30px;
  height: 30px;
  border: none;
  background-color: rgba(247, 247, 247, 0.9);
  border-radius: 4px;
}
</style>

<script>
    
    function closestickyAds()
{
  var v = document.getElementById("foxads");
  v.style.display = "none";
}
</script>
    

    <!-- Back To Top Button End -->



    <!-- ==== jQuery Library ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery-3.2.1.min.js"></script>



    <!-- ==== Bootstrap Framework ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/bootstrap.min.js"></script>



    <!-- ==== StickyJS Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.sticky.min.js"></script>



    <!-- ==== HoverIntent Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.hoverIntent.min.js"></script>



    <!-- ==== Marquee Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.marquee.min.js"></script>



    <!-- ==== Validation Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.validate.min.js"></script>



    <!-- ==== Isotope Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/isotope.min.js"></script>



    <!-- ==== Resize Sensor Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/resizesensor.min.js"></script>



    <!-- ==== Sticky Sidebar Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/theia-sticky-sidebar.min.js"></script>



    <!-- ==== Zoom Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.zoom.min.js"></script>



    <!-- ==== Bar Rating Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.barrating.min.js"></script>



    <!-- ==== Countdown Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/jquery.countdown.min.js"></script>



    <!-- ==== RetinaJS Plugin ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/retina.min.js"></script>



    <!-- ==== Main JavaScript ==== -->

    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/main.js"></script>



    <script src="<?= $siteoptions['web_resource']?>/newsbd/js/owl.carousel.js"></script>

    <script>
        function closeModal(){
            $('#myModal').modal('hide')
        }
    $(document).ready(function() {
        $('#myModal').modal('show')
        setTimeout(closeModal, 10000);

        var myEle = document.getElementById("des_cription");
        if(myEle){
            var newWidth = document.getElementById('des_cription').offsetWidth;
            var newHeigth = .56*newWidth;
            $("iframe").width(newWidth);
            $("iframe").height(newHeigth);
        }

        var myElePlay = document.getElementById("play-frame");
        if(myElePlay){
            var newWidth = document.getElementById('play-frame').offsetWidth;
            var newHeigth = .56*newWidth;
            $("iframe").width(newWidth);
            $("iframe").height(newHeigth);
        }
        
        $('.owl-carousel').owlCarousel({

            loop: true,

            margin: 10,

            autoplay:true,

            autoplayTimeout:3000,

            autoplayHoverPause:true,

            responsiveClass: true,

            responsive: {

                0: {

                items: 1,
                autoplay:true,
                loop: true,
                nav: true

                },

                600: {

                items: 3,
                autoplay:true,
                loop: true,
                nav: true

                },

                1000: {

                items: 5,

                autoplay:true,
                loop: true,
                nav: true,
                margin: 20

                }

            }

        });
        

        $('.owl-carousel-headingbox').owlCarousel({

            loop: true,

            margin: 0,

            autoplay:true,

            autoplayTimeout:2000,

            autoplayHoverPause:true,

            responsiveClass: true,

            responsive: {

                0: {

                items: 1,

                nav: true

                },

                600: {

                items: 2,

                nav: false

                },

                1000: {

                items: 3,

                nav: true,

                loop: true

                }

            }

        });

        $('.owl-carousel-3').owlCarousel({

loop: true,

margin: 0,

autoplay:true,

autoplayTimeout:2000,

autoplayHoverPause:true,

responsiveClass: true,

responsive: {

    0: {
    items: 1,
    nav: true,
    loop: true
    },

    600: {
    items: 1,
    loop: true,
    nav: true,
    },

    1000: {
    items: 1,
    nav: true,
    loop: true
    }

}

})

    });

    </script>



</body>

</html>

