<!DOCTYPE html>
<html lang="bn">
<head>
<?= $this->element('meta')?>
<link rel="stylesheet" href="<?= $siteoptions['web_resource'].'/'.$siteoptions['web_layout']?>/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="<?= $siteoptions['web_resource'].'/'.$siteoptions['web_layout']?>/css/styles.css">
<link rel="stylesheet" type="text/css" href="<?= $siteoptions['web_resource'].'/'.$siteoptions['web_layout']?>/css/SolaimanLipi.css">
<?php
if(!empty($siteoptions['web_header'])){
    echo $siteoptions['web_header'];
}
?>
<style>
        body, .advertisement {
            background: #f9f9f9;
        }

        @media  screen and (max-width: 1299px) and (min-width: 1200px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
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
<div class="body-items" style="background: #f9f9f9">
<div class="container d-none d-print">
<img class="print-logo" style="max-width: 250px;" src="<?= $siteoptions['web_url'] ?>/logo.png" alt="logo" />
</div>

<div class="container d-none d-lg-flex py-3 navbar-root" id="section-down">
<div class="d-flex justify-content-between align-items-center w-100">
<a class="brand-logo-top" title="<?= $siteoptions['web_name']?>" href="<?= $siteoptions['web_url']?>">
<img style="max-width: 300px;" src="<?= $siteoptions['web_resource'] ?>/img/logo.png" alt="logo" />
</a>
    <p class="d-flex align-items-center">
        <span class="d-flex align-items-center mr-3">
            <svg class="mr-2" fill="black" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0z" fill="none" /><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" /></svg>
            <span>ঢাকা</span>
        </span>
        <span class="d-flex align-items-center">
            <svg class="mr-2" fill="black" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0z" fill="none" /><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" /></svg>
            <span> <?= $str_day?>, <?= $str_date.' '.$str_month.' '.$str_year?></span>
        </span>
    </p>

    <div class="d-flex align-items-center social-media-icons">
        <?php if(!empty($siteoptions['web_facebook'])){
            ?><a href="<?= $siteoptions['web_facebook']?>" aria-label="Facebook" target="_blank" class="pl-2" rel="nofollow noopener">
            <div class="social-icon facebook"><i class="fa fa-facebook"></i></div>
            </a><?php
        }?>

        <?php if(!empty($siteoptions['web_youtube'])){
            ?><a href="<?= $siteoptions['web_youtube']?>" aria-label="Youtube" target="_blank" class="pl-2" rel="nofollow noopener">
            <div class="social-icon youtube"><i class="fa fa-youtube-play"></i></div>
            </a><?php
        }?>
        
        <?php if(!empty($siteoptions['web_twitter'])){
            ?><a href="<?= $siteoptions['web_twitter']?>" aria-label="twitter" target="_blank" class="pl-2" rel="nofollow noopener">
            <div class="social-icon twitter"><i class="fa fa-twitter"></i></div>
            </a><?php
        }?>

        <?php if(!empty($siteoptions['web_linkedin'])){
            ?><a href="<?= $siteoptions['web_linkedin']?>" aria-label="linkedin" target="_blank" class="pl-2" rel="nofollow noopener">
            <div class="social-icon linkedin"><i class="fa fa-linkedin"></i></div>
            </a><?php
        }?>

        <?php if(!empty($siteoptions['web_google'])){
            ?><a href="<?= $siteoptions['web_google']?>" aria-label="google" target="_blank" class="pl-2" rel="nofollow noopener">
            <div class="social-icon google"><i class="fa fa-google"></i></div>
            </a><?php
        }?>

        <?php if(!empty($siteoptions['web_rssfeed'])){
            ?><a href="<?= $siteoptions['web_rssfeed']?>" aria-label="rss" target="_blank" class="pl-2" rel="nofollow noopener">
            <div class="social-icon rss"><i class="fa fa-rss"></i></div>
            </a><?php
        }?>
        
    </div>

</div>
</div>
<?= $this->element('dp/navBar')?>
<main role="main">
<div data-nosnippet>
<style>
            .category-header .read-more {
                background: none;
            }

            .sct-items.active {
                background: #dfdfdf;
            }

            .et-items.active {
                background: #dfdfdf;
            }

            .ect-items.active {
                background: #dfdfdf;
            }
        </style>
<style>
                .trending-tag {
                    display: flex;
                }

                .trending-tag span {
                    color: #124B65;
                    font-size: 14px;
                    line-height: 1.5;
                    font-weight: 700;
                    margin-right: 10px;
                }

                .trending-tag a {
                    color: #fff;
                    font-size: 15px;
                    line-height: 1.5;
                    margin: 0 7px;
                    padding: 3px 10px;
                    background: #1589bd;
                }

                /* Tablet desktop :768px. */
                @media (min-width: 768px) and (max-width: 991px) {
                    .trending-tag {
                        overflow-x: auto;
                        white-space: nowrap;
                    }
                }

                /* small mobile :320px. */
                @media (max-width: 767px) {
                    .trending-tag {
                        overflow-x: auto;
                        white-space: nowrap;
                    }
                }

                /* Large Mobile :480px. */
                @media  only screen and (min-width: 480px) and (max-width: 767px) {
                    .container {
                        width: 450px
                    }

                    .trending-tag {
                        overflow-x: auto;
                        white-space: nowrap;
                    }
                }
            </style>
<div class="container">
<div class="trending-tag d-flex align-items-center mt-3">
<span>ট্রেন্ডিং : </span>
<a href="<?= $siteoptions['web_url'] ?>/topic/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6-%E0%A6%B0%E0%A7%87%E0%A6%B2%E0%A6%93%E0%A6%AF%E0%A6%BC%E0%A7%87" target="_blank">বাংলাদেশ রেলওয়ে</a>
<a href="<?= $siteoptions['web_url'] ?>/topic/%E0%A6%B2%E0%A7%8B%E0%A6%A1%E0%A6%B6%E0%A7%87%E0%A6%A1%E0%A6%BF%E0%A6%82" target="_blank">লোডশেডিং</a>
<a href="<?= $siteoptions['web_url'] ?>/topic/%E0%A6%95%E0%A6%B0%E0%A7%8B%E0%A6%A8%E0%A6%BE%E0%A6%AD%E0%A6%BE%E0%A6%87%E0%A6%B0%E0%A6%BE%E0%A6%B8" target="_blank">করোনাভাইরাস</a>
<a href="<?= $siteoptions['web_url'] ?>/topic/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A6%B0%E0%A6%BF%E0%A6%B0-%E0%A6%96%E0%A6%AC%E0%A6%B0" target="_blank">চাকরির-খবর</a>
<a href="<?= $siteoptions['web_url'] ?>/topic/%E0%A6%86%E0%A6%AC%E0%A6%B9%E0%A6%BE%E0%A6%93%E0%A7%9F%E0%A6%BE%E0%A6%B0-%E0%A6%96%E0%A6%AC%E0%A6%B0" target="_blank">আবহাওয়ার খবর</a>
<a href="<?= $siteoptions['web_url'] ?>/topic/%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%80%E0%A6%B2%E0%A6%99%E0%A7%8D%E0%A6%95%E0%A6%BE-%E0%A6%B8%E0%A6%82%E0%A6%95%E0%A6%9F" target="_blank">শ্রীলঙ্কা সংকট</a>
</div>
</div>
<style>
            .sports-section-contents .news-item img {
                height: 75px;
            }
        </style>
<div class="container section-top mt-3">
<div class="row">
<div class="col-lg-6 col-md-12 top-left-section lead-top m-order-0">
<div class="row">
<div class="col-12 lead-news">
<a href="<?= $siteoptions['web_url'] ?>/national/130518" class="news-item news-item-lead">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/hasina-pm-20220724113347.jpg?width=640&amp;height=335" alt="মিষ্টি পানির মাছ উৎপাদনে আমরা স্বয়ংসম্পূর্ণ" class="lazyload img-loader">
</div>
<h2 class="title" style="margin: 10px 0">
মিষ্টি পানির মাছ উৎপাদনে আমরা স্বয়ংসম্পূর্ণ
</h2>
<span class="d-none d-sm-block">প্রধানমন্ত্রী শেখ হাসিনা বলেছেন, মিষ্টি পানির মাছ উৎপাদনে আমরা স্বয়ংসম্পূর্ণতা অর্জন করতে পেরেছি। রোববার (২৪ জুলাই) রাজধানীর বঙ্গবন্ধু...</span>
</a>
</div>
</div>
<div class="row">
<div class="col-sm-6 scaled lead-below-item">
<a href="<?= $siteoptions['web_url'] ?>/law-courts/130517" class="news-item news-item-list">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/istockphoto-506611752-17066-20220722012310-202207221724311-20220724112112.jpg?width=130&amp;height=90" alt="টেকনাফের ইউএনও’র ভাষা অগ্রহণযোগ্য-আপত্তিকর : হাইকোর্ট" class="lazyload img-loader">
<i class="fa fa-play-circle video-icon"></i>
</div>
<div class="">
<h2 class="title">
টেকনাফের ইউএনও’র ভাষা অগ্রহণযোগ্য-আপত্তিকর : হাইকোর্ট
</h2>
</div>
</a>
</div>
<div class="col-sm-6 scaled ">
<a href="<?= $siteoptions['web_url'] ?>/economy/130538" class="news-item news-item-list">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/cpd-20220724125249.jpg?width=130&amp;height=90" alt="সংকট স্বল্পমেয়াদী নয়, সহজে মুক্তি মিলবে না" class="lazyload img-loader">
<i class="fa fa-play-circle video-icon"></i>
</div>
<div class="">
<h2 class="title">
সংকট স্বল্পমেয়াদী নয়, সহজে মুক্তি মিলবে না
</h2>
</div>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 top-list-1 m-order-1  " style="order: -1">
<div class="second-center scaled" style="background: #Eff5F4">
<a href="<?= $siteoptions['web_url'] ?>/national/130552" class="news-item news-item-list py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/khurshid-alam-dg-20220724135005.jpg?width=130&amp;height=90" alt="করোনায় মৃতদের ৭০ শতাংশই টিকা নেয়নি : স্বাস্থ্যের ডিজি" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
করোনায় মৃতদের ৭০ শতাংশই টিকা নেয়নি : স্বাস্থ্যের ডিজি
</h2>
</div>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130555" class="news-item news-item-list py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/book-opening-igp-20220724135955.jpg?width=130&amp;height=90" alt="‘জঙ্গিবাদ’ রোগ মুক্তিতে দরকার বুদ্ধিবৃত্তিক প্রতিরোধ : আইজিপি" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
‘জঙ্গিবাদ’ রোগ মুক্তিতে দরকার বুদ্ধিবৃত্তিক প্রতিরোধ : আইজিপি
</h2>
</div>
</a>
<a href="<?= $siteoptions['web_url'] ?>/politics/130554" class="news-item news-item-list py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/06-202204061633231-20220724135542.jpg?width=130&amp;height=90" alt="নির্বাচনকালীন সরকার নিয়ে দেশে কোনো সংকট নেই : ওবায়দুল কাদের" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
নির্বাচনকালীন সরকার নিয়ে দেশে কোনো সংকট নেই : ওবায়দুল কাদের
</h2>
</div>
</a>
<div class="advertisement m-py-2 md-py-2">
<div id='div-gpt-ad-1620283475109-0' style='max-width:100%;width: 300px; height: 250px;'>
<script>
                                    googletag.cmd.push(function () {
                                        googletag.display('div-gpt-ad-1620283475109-0');
                                    });
                                </script>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="top-right m-pt-3">
<div class="opinion-contents">
<div class="category-header opinion-header d-flex justify-content-between align-items-center">
<div class="heading opinion-heading d-flex align-items-center">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/opinion">মতামত</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/opinion">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও পড়ুন</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="regular-list scaled ai-custom">
<a href="<?= $siteoptions['web_url'] ?>/opinion/130490" class="news-item news-item-regular py-2 d-flex">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/setup/author/anowar-khasru-parvez-20210815130950.jpg" alt="করোনার চতুর্থ ঢেউ কতটা ভয়ংকর" class="lazyload img-loader" style="border-radius: 50%;width: 90px;height: 90px;margin-right: 8px">
<div class="d-flex flex-column" style="">
<h2 class="title">করোনার চতুর্থ ঢেউ কতটা ভয়ংকর</h2>
<p style="margin-top: 5px;color: #696464;">ড. আনোয়ার খসরু পারভেজ</p>
</div>
</a>
 </div>
</div>
<div class="advertisement mt-3">
<div id='div-gpt-ad-1620297530803-0' style='max-width: 100%; width: 300px; height: 250px;'>
<script>
                                    googletag.cmd.push(function () {
                                        googletag.display('div-gpt-ad-1620297530803-0');
                                    });
                                </script>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="section-two py-3 bg-section-two m-pt-0 mt-3 m-mt-2">
<div class="container">
<div class="row">
<div class="col-xl-9 col-sm-9 special-top">
<div class="row">
<div class="col-sm-4 box-news ">
<a href="<?= $siteoptions['web_url'] ?>/national/130565" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/jasd-20220724143235.jpg?width=330&amp;height=175" alt="বিদেশি কূটনীতিকরা অযাচিতভাবে নাক গলিয়েছে : জাসদ" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
বিদেশি কূটনীতিকরা অযাচিতভাবে নাক গলিয়েছে : জাসদ
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news ">
<a href="<?= $siteoptions['web_url'] ?>/politics/130542" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/ec-khelafot-20220724131552.jpg?width=330&amp;height=175" alt="সংরক্ষিত মহিলা আসন বিলুপ্তিসহ ৪০ প্রস্তাব খেলাফত আন্দোলনের" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
সংরক্ষিত মহিলা আসন বিলুপ্তিসহ ৪০ প্রস্তাব খেলাফত আন্দোলনের
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news ">
<a href="<?= $siteoptions['web_url'] ?>/sports/cricket/130539" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/nurul-hasan-sohan-20220724125639.jpg?width=330&amp;height=175" alt="অধিনায়ক সোহান গর্বিত হলেও রোমাঞ্চিত নন" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
অধিনায়ক সোহান গর্বিত হলেও রোমাঞ্চিত নন
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news ">
<a href="<?= $siteoptions['web_url'] ?>/country/130564" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/raj1-20220724142949.jpg?width=330&amp;height=175" alt="বরেন্দ্রজুড়ে পানির সংকট বাড়াচ্ছে রাজনীতি" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
বরেন্দ্রজুড়ে পানির সংকট বাড়াচ্ছে রাজনীতি
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news ">
<a href="<?= $siteoptions['web_url'] ?>/national/130535" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/pakistan-high-comission-20220724124229.jpg?width=330&amp;height=175" alt="বাংলা‌দে‌শের পতাকাযুক্ত ছ‌বিটি স‌রি‌য়ে নি‌ল পা‌কিস্তান হাইক‌মিশন" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
বাংলা‌দে‌শের পতাকাযুক্ত ছ‌বিটি স‌রি‌য়ে নি‌ল পা‌কিস্তান হাইক‌মিশন
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news ">
<a href="<?= $siteoptions['web_url'] ?>/country/130526" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/raj-20220724115517.jpg?width=330&amp;height=175" alt="রামেক হাসপাতালের করোনা ইউনিটে আরও ৩ জনের মৃত্যু" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
রামেক হাসপাতালের করোনা ইউনিটে আরও ৩ জনের মৃত্যু
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news d-none d-sm-flex">
<a href="<?= $siteoptions['web_url'] ?>/national/130528" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rain-dhaka-20220724120843.jpg?width=330&amp;height=175" alt="ভারি বৃষ্টির সঙ্গে তাপমাত্রা কমার আভাস" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
ভারি বৃষ্টির সঙ্গে তাপমাত্রা কমার আভাস
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news d-none d-sm-flex">
<a href="<?= $siteoptions['web_url'] ?>/international/130525" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/putin-47-20220724115502.jpg?width=330&amp;height=175" alt="রাশিয়ার বিরুদ্ধে নিষেধাজ্ঞা ব্যর্থ হয়েছে : হাঙ্গেরি" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
রাশিয়ার বিরুদ্ধে নিষেধাজ্ঞা ব্যর্থ হয়েছে : হাঙ্গেরি
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news d-none d-sm-flex">
<a href="<?= $siteoptions['web_url'] ?>/country/130541" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/comilla1-20220724131434.jpg?width=330&amp;height=175" alt="ফেলনা মাছের আঁশে ভাগ্য বদল মাহবুবের" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
ফেলনা মাছের আঁশে ভাগ্য বদল মাহবুবের
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news d-none d-sm-flex">
<a href="<?= $siteoptions['web_url'] ?>/country/130363" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rongpur02-20220723145111.jpg?width=330&amp;height=175" alt="ভরা বর্ষায় তীব্র খরা উত্তরে, ফেটে চৌচির আমনের জমি" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
ভরা বর্ষায় তীব্র খরা উত্তরে, ফেটে চৌচির আমনের জমি
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news d-none d-sm-flex">
<a href="<?= $siteoptions['web_url'] ?>/national/130494" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news-20220720111658-20220724091249.jpg?width=330&amp;height=175" alt="ঢাকার কোন এলাকায় আজ কখন লোডশেডিং" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
ঢাকার কোন এলাকায় আজ কখন লোডশেডিং
</h2>
</div>
</a>
</div>
<div class="col-sm-4 box-news d-none d-sm-flex">
<a href="<?= $siteoptions['web_url'] ?>/country/130474" class="news-item news-item-box m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/untitled-10-20220724051928.jpg?width=330&amp;height=175" alt="নয় মাস পর হিলি স্থলবন্দর দিয়ে চাল আমদানি শুরু" class="lazyload img-loader">
</div>
<div class="">
<h2 class="title">
নয় মাস পর হিলি স্থলবন্দর দিয়ে চাল আমদানি শুরু
</h2>

</div>
</a>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-3 m-pt-3">
<div class="recent-popular">
<div>
<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"><a class="nav-item nav-link active" id="nav-recent-tab" data-toggle="tab" href="#nav-recent" role="tab" aria-controls="nav-recent" aria-selected="true">সর্বশেষ</a>
<a class="nav-item nav-link" id="nav-popular-tab" data-toggle="tab" href="#nav-popular" role="tab" aria-controls="nav-popular" aria-selected="false">সর্বাধিক পঠিত</a>
</div>
</div>
<div class="tab-content px-sm-0" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-recent" role="tabpanel" aria-labelledby="nav-recent-tab">
<div>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/country/130580">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/khulna1-20220724153053.jpg?width=130&amp;height=90" alt="খুলনায় বৃক্ষ রোপণ করলেন আনসার সদস্যরা">
</div>
<h2 class="news-item-lite">
খুলনায় বৃক্ষ রোপণ করলেন আনসার সদস্যরা
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/law-courts/130579">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/roni-20220724152439.jpg?width=130&amp;height=90" alt="বাড়ি উচ্ছেদ বন্ধে গোলাম মাওলা রনির রিট খারিজ">
</div>
<h2 class="news-item-lite">
বাড়ি উচ্ছেদ বন্ধে গোলাম মাওলা রনির রিট খারিজ
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130578">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/apu-biswas-1-20220724151610.jpg?width=130&amp;height=90" alt="শাকিবের বিয়ে প্রসঙ্গে অপু বললেন, ‘আমিও করব’">
</div>
<h2 class="news-item-lite">
শাকিবের বিয়ে প্রসঙ্গে অপু বললেন, ‘আমিও করব’
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/country/130577">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rongpur1-20220724151515.jpg?width=130&amp;height=90" alt="রংপুরে ১২ বছরে মাছের উৎপাদন বেড়েছে ৪৪৩৮৪ মেট্রিক টন">
</div>
<h2 class="news-item-lite">
রংপুরে ১২ বছরে মাছের উৎপাদন বেড়েছে ৪৪৩৮৪ মেট্রিক টন
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/national/130576">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/assaduzzaman-20220724151229.jpg?width=130&amp;height=90" alt="বাংলাদেশ ধর্মান্ধ রাষ্ট্র নয় এটা সারা পৃথিবীতে প্রমাণিত">
</div>
<h2 class="news-item-lite">
বাংলাদেশ ধর্মান্ধ রাষ্ট্র নয় এটা সারা পৃথিবীতে প্রমাণিত
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/sports/cricket/130575">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/india-cricket-2-20220724150821.jpg?width=130&amp;height=90" alt="বাইরের লিগে খেলার অনুমতি পাচ্ছেন কোহলিরা!">
</div>
<h2 class="news-item-lite">
বাইরের লিগে খেলার অনুমতি পাচ্ছেন কোহলিরা!
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/politics/130574">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/bnp-news-20220724150704.jpg?width=130&amp;height=90" alt="‘কুইক রেন্টালের নামে সরকার কোটি কোটি টাকা লুটপাট করেছে’">
</div>
<h2 class="news-item-lite">
‘কুইক রেন্টালের নামে সরকার কোটি কোটি টাকা লুটপাট করেছে’
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/international/130573">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/india-223-20220724150638.jpg?width=130&amp;height=90" alt="ভারতে করোনায় আরও ৩৬ মৃত্যু, শনাক্ত ২০ হাজারের বেশি">
</div>
<h2 class="news-item-lite">
ভারতে করোনায় আরও ৩৬ মৃত্যু, শনাক্ত ২০ হাজারের বেশি
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/country/130572">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/patuakhali-20220724150455.jpg?width=130&amp;height=90" alt="দুমকিতে কুকুরের কামড়ে বিশ্ববিদ্যালয় শিক্ষকসহ আহত ১৫">
</div>
<h2 class="news-item-lite">
দুমকিতে কুকুরের কামড়ে বিশ্ববিদ্যালয় শিক্ষকসহ আহত ১৫
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/country/130571">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/kustia-20220724145234.jpg?width=130&amp;height=90" alt="আ.লীগ নেতাসহ দুজনকে গুলি করে খুন, ৫ জনের যাবজ্জীবন">
</div>
<h2 class="news-item-lite">
আ.লীগ নেতাসহ দুজনকে গুলি করে খুন, ৫ জনের যাবজ্জীবন
</h2>
</a>
</div>
</div>
<div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
<div>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/country/130529">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/gaibanda-20220724121255.jpg?width=130&amp;height=90" alt="ফেসবুকে প্রেম, দুই সন্তানের মায়ের সঙ্গে স্কুলছাত্রের বিয়ে!">
</div>
<h2 class="news-item-lite">
ফেসবুকে প্রেম, দুই সন্তানের মায়ের সঙ্গে স্কুলছাত্রের বিয়ে!
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/law-courts/130517">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/istockphoto-506611752-17066-20220722012310-202207221724311-20220724112112.jpg?width=130&amp;height=90" alt="টেকনাফের ইউএনও’র ভাষা অগ্রহণযোগ্য-আপত্তিকর : হাইকোর্ট">
<i class="fa fa-play-circle video-icon"></i>
</div>
<h2 class="news-item-lite">
টেকনাফের ইউএনও’র ভাষা অগ্রহণযোগ্য-আপত্তিকর : হাইকোর্ট
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/country/130509">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/satkhira-20220724104101.jpg?width=130&amp;height=90" alt="পশুর সঙ্গে বিকৃত যৌনাচার, দেখে ফেলায় বন্ধুর স্ত্রীকে খুন">
</div>
<h2 class="news-item-lite">
পশুর সঙ্গে বিকৃত যৌনাচার, দেখে ফেলায় বন্ধুর স্ত্রীকে খুন
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/country/130500">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rajbari-20220724095732.jpg?width=130&amp;height=90" alt="উত্ত্যক্ত করায় গরু ব্যবসায়ীকে মেরে গোয়ালঘরে পুঁতে রাখলেন দম্পতি">
</div>
<h2 class="news-item-lite">
উত্ত্যক্ত করায় গরু ব্যবসায়ীকে মেরে গোয়ালঘরে পুঁতে রাখলেন দম্পতি
</h2>
</a>
<a class="rp-item py-2 " href="<?= $siteoptions['web_url'] ?>/jobs-career/130506">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/aci-jobs-news-20210904101657-20220724103317.jpg?width=130&amp;height=90" alt="লোক খুঁজছে এসিআই, আবেদন করুন এখনই ">
</div>
<h2 class="news-item-lite">
লোক খুঁজছে এসিআই, আবেদন করুন এখনই 
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/jobs-career/130545">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/re-20220522075057-20220604104616-20220611123640-20220724132545.jpg?width=130&amp;height=90" alt="চাকরি দেওয়ার জন্য লোক খুঁজছে মেঘনা গ্রুপ">
</div>
<h2 class="news-item-lite">
চাকরি দেওয়ার জন্য লোক খুঁজছে মেঘনা গ্রুপ
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/jobs-career/130516">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/jobs-holder-20220714152718-20220724110653.jpg?width=130&amp;height=90" alt="মাসে ৩৩ হাজার টাকা বেতনে চাকরির সুযোগ, পাবেন সপ্তাহে ২দিন ছুটি">
</div>
<h2 class="news-item-lite">
মাসে ৩৩ হাজার টাকা বেতনে চাকরির সুযোগ, পাবেন সপ্তাহে ২দিন ছুটি
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/sports/cricket/130568">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/shakib-al-hasan-20220724143819.jpg?width=130&amp;height=90" alt="৫ কোটি ৮০ লাখ টাকা ক্ষতিপূরণ চেয়ে সাকিবের লিগ্যাল নোটিশ">
</div>
<h2 class="news-item-lite">
৫ কোটি ৮০ লাখ টাকা ক্ষতিপূরণ চেয়ে সাকিবের লিগ্যাল নোটিশ
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/country/130505">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/cumilla-2-20220724105758.jpg?width=130&amp;height=90" alt="নিয়ন্ত্রণ হারিয়ে প্রাইভেট কার খাদে, স্বামী-স্ত্রী-শ্যালিকা নিহত">
</div>
<h2 class="news-item-lite">
নিয়ন্ত্রণ হারিয়ে প্রাইভেট কার খাদে, স্বামী-স্ত্রী-শ্যালিকা নিহত
</h2>
</a>
<a class="rp-item py-2 d-none d-sm-flex" href="<?= $siteoptions['web_url'] ?>/sports/football/130515">
<div class="image-container">
<img class="img-loader" src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/raphinha-20220724110651.jpg?width=130&amp;height=90" alt="রাফিনিয়ার গোলে দাপট দেখিয়ে রিয়ালকে হারাল বার্সা">
</div>
<h2 class="news-item-lite">
রাফিনিয়ার গোলে দাপট দেখিয়ে রিয়ালকে হারাল বার্সা
</h2>
</a>
</div>
</div>
</div>
<div class="bg-primary text-center py-2">
<a style="font-size: 19px; color: #FFF" href="<?= $siteoptions['web_url'] ?>/archive" rel="nofollow">আর্কাইভ</a>
</div>
</div>
<div class="two-right">
<div class="advertisement">
<div id='div-gpt-ad-1620297568227-0' style='max-width:100%; width: 300px; height: 250px;'>
<script>
                                        googletag.cmd.push(function () {
                                            googletag.display('div-gpt-ad-1620297568227-0');
                                        });
                                    </script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container mt-3">
<div class="advertisement">
<div id='div-gpt-ad-1641204562078-0' style='min-width: 300px; min-height: 250px;'>
<script>
                        googletag.cmd.push(function () {
                            googletag.display('div-gpt-ad-1641204562078-0');
                        });
                    </script>
</div>
</div>
</div>
<div class="container pt-3 m-pt-2">
<div class="row">
<div class="col-lg-9 col-md-8 national-items">
<div class="category-header national-ch d-flex justify-content-between align-items-center national__home mt-2">
<div class="heading national-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/national" class="national-lc">জাতীয়</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/national" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right"></i></p>
</div>
</a>
</div>
<div class="row border-right">
<div class="col-lg-8 col-12">
<div class="grid-fourth pt-2 m-pt-0">
<a href="<?= $siteoptions['web_url'] ?>/national/130558" class="grid-fourth-item grid-fourth-item__1 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/shahab-20220724141505.jpg?width=330&amp;height=175" alt="২০৩০ সাল পর্যন্ত গাছ না কাটার নির্দেশ বনমন্ত্রীর" class="lazyload img-loader">
</div>
<h2>
২০৩০ সাল পর্যন্ত গাছ না কাটার নির্দেশ বনমন্ত্রীর
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130555" class="grid-fourth-item grid-fourth-item__2 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/book-opening-igp-20220724135955.jpg?width=330&amp;height=175" alt="‘জঙ্গিবাদ’ রোগ মুক্তিতে দরকার বুদ্ধিবৃত্তিক প্রতিরোধ : আইজিপি" class="lazyload img-loader">
</div>
<h2>
‘জঙ্গিবাদ’ রোগ মুক্তিতে দরকার বুদ্ধিবৃত্তিক প্রতিরোধ : আইজিপি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130547" class="grid-fourth-item grid-fourth-item__3 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/imran-ahmad-20220724132632.jpg?width=330&amp;height=175" alt="তৃতীয়বার ক‌রোনায় আক্রান্ত প্রবাসী কল‌্যাণমন্ত্রী" class="lazyload img-loader">
</div>
<h2>
তৃতীয়বার ক‌রোনায় আক্রান্ত প্রবাসী কল‌্যাণমন্ত্রী
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130536" class="grid-fourth-item grid-fourth-item__4 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/alesha-mart-20220724124332.jpg?width=330&amp;height=175" alt="আলেশা মার্টের টাকা ফেরত পেতে প্রধানমন্ত্রী হস্তক্ষেপ কামনা" class="lazyload img-loader">
<i class="fa fa-play-circle video-icon"></i>
</div>
<h2>
আলেশা মার্টের টাকা ফেরত পেতে প্রধানমন্ত্রী হস্তক্ষেপ কামনা
</h2>
</a>
</div>
</div>
<div class="col-lg-4 col-12 third-right d-none d-sm-flex">
<div class="regular-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/national/130531" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news-20220508013304-20220724122409.jpg?width=130&amp;height=90" alt="মাছের ‘একটু রেসিপি’ দিলেন প্রধানমন্ত্রী" class="lazyload img-loader">

</div>
<h2 class="title">
মাছের ‘একটু রেসিপি’ দিলেন প্রধানমন্ত্রী
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130528" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rain-dhaka-20220724120843.jpg?width=130&amp;height=90" alt="ভারি বৃষ্টির সঙ্গে তাপমাত্রা কমার আভাস" class="lazyload img-loader">
</div>
<h2 class="title">
ভারি বৃষ্টির সঙ্গে তাপমাত্রা কমার আভাস
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130527" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/ctg-20220724120547.jpg?width=130&amp;height=90" alt="মদের চালান জব্দ : ২৫ কোটি টাকা  রাজস্ব ফাঁকির চেষ্টা" class="lazyload img-loader">
</div>
<h2 class="title">
মদের চালান জব্দ : ২৫ কোটি টাকা  রাজস্ব ফাঁকির চেষ্টা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130513" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/yaba-20210905155812-20220724105346.jpg?width=130&amp;height=90" alt="রাজধানীতে পুলিশের অভিযানে গ্রেপ্তার ৫৬, মামলা ৪৩" class="lazyload img-loader">
</div>
<h2 class="title">
রাজধানীতে পুলিশের অভিযানে গ্রেপ্তার ৫৬, মামলা ৪৩
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130510" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/election-commission-20220724104453.jpg?width=130&amp;height=90" alt="বাংলাদেশ খেলাফত আন্দোলনের স‌ঙ্গে সংলা‌পে ইসি" class="lazyload img-loader">
</div>
<h2 class="title">
বাংলাদেশ খেলাফত আন্দোলনের স‌ঙ্গে সংলা‌পে ইসি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130494" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news-20220720111658-20220724091249.jpg?width=130&amp;height=90" alt="ঢাকার কোন এলাকায় আজ কখন লোডশেডিং" class="lazyload img-loader">
</div>
<h2 class="title">
ঢাকার কোন এলাকায় আজ কখন লোডশেডিং
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/national/130458" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/1401-20220723215452.jpg?width=130&amp;height=90" alt="নিরাপদ-স্বাস্থ্যকর মৎস্য পণ্য রপ্তানি নিশ্চিতে সরকার বদ্ধপরিকর" class="lazyload img-loader">
</div>
<h2 class="title">
নিরাপদ-স্বাস্থ্যকর মৎস্য পণ্য রপ্তানি নিশ্চিতে সরকার বদ্ধপরিকর
</h2>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 politics">
<div class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
<div class="heading politics-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/politics" class="politics-lc">রাজনীতি</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/politics" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="regular-list scaled ai-custom">
<a href="<?= $siteoptions['web_url'] ?>/politics/130574" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_url'] ?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/bnp-news-20220724150704.jpg?width=330&amp;height=175" alt="‘কুইক রেন্টালের নামে সরকার কোটি কোটি টাকা লুটপাট করেছে’" class="lazyload img-loader">
</div>
<h2 class="title">
‘কুইক রেন্টালের নামে সরকার কোটি কোটি টাকা লুটপাট করেছে’
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/politics/130523" class="news-item news-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_url'] ?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/bnp1-20220724115008.jpg?width=130&amp;height=90" alt="প্রেস ক্লাবের সামনে বিএনপির বিক্ষোভ সমাবেশ চলছে" class="lazyload img-loader">
</div>
<h2 class="title">
প্রেস ক্লাবের সামনে বিএনপির বিক্ষোভ সমাবেশ চলছে
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/politics/130449" class="news-item news-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_url'] ?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/1201-20220723205820.jpg?width=130&amp;height=90" alt="শোকাবহ আগস্ট ঘিরে আ.লীগের কর্মসূচি" class="lazyload img-loader">
</div>
<h2 class="title">
শোকাবহ আগস্ট ঘিরে আ.লীগের কর্মসূচি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/politics/130445" class="news-item news-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_url'] ?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/1101-20220723204212.jpg?width=130&amp;height=90" alt="চারদিকে চুরি-মহাচুরির রাজত্ব : গণফোরাম সভাপতি" class="lazyload img-loader">
</div>
<h2 class="title">
চারদিকে চুরি-মহাচুরির রাজত্ব : গণফোরাম সভাপতি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/politics/130441" class="news-item news-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_url'] ?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/1001-20220723202533.jpg?width=130&amp;height=90" alt="শিক্ষাপ্রতিষ্ঠানে ছাত্রলীগকে অবাঞ্ছিত করার আহ্বান" class="lazyload img-loader">
</div>
<h2 class="title">
শিক্ষাপ্রতিষ্ঠানে ছাত্রলীগকে অবাঞ্ছিত করার আহ্বান
</h2>
</a>
</div>
</div>
</div>
</div>
<div class="container mt-3">
<div class="advertisement">
<div id='div-gpt-ad-1654068917401-0' style='min-width: 970px; min-height:90px;'>
<script>
                        googletag.cmd.push(function () {
                            googletag.display('div-gpt-ad-1654068917401-0');
                        });
                    </script>
</div>
</div>
</div>
<div class="container pt-3 m-pt-2">
<div class="row">
<div class="col-lg-9 col-md-8">
<div class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
<div class="heading opinion-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/country" class="country-lc">সারাদেশ</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/country" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="row border-right country-articles">
<div class="col-12 col-md-12 col-xl-4">
<div class="row type-sect-three-left">
<div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
<a href="<?= $siteoptions['web_url'] ?>/country/130580" class="news-item news-item-box pt-2 m-pb-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/khulna1-20220724153053.jpg?width=330&amp;height=175" alt="খুলনায় বৃক্ষ রোপণ করলেন আনসার সদস্যরা" class="lazyload img-loader">
<h2 class="title">
খুলনায় বৃক্ষ রোপণ করলেন আনসার সদস্যরা
</h2>
</a>
</div>
<div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
<a href="<?= $siteoptions['web_url'] ?>/country/130577" class="news-item news-item-box pt-2 m-pb-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rongpur1-20220724151515.jpg?width=330&amp;height=175" alt="রংপুরে ১২ বছরে মাছের উৎপাদন বেড়েছে ৪৪৩৮৪ মেট্রিক টন" class="lazyload img-loader">
<h2 class="title">
রংপুরে ১২ বছরে মাছের উৎপাদন বেড়েছে ৪৪৩৮৪ মেট্রিক টন
</h2>
</a>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-xl-4">
<div class="clk-list clk-center">
<a href="<?= $siteoptions['web_url'] ?>/country/130572" class="clk-item clk-item-regular py-2 ">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/patuakhali-20220724150455.jpg?width=130&amp;height=90" alt="দুমকিতে কুকুরের কামড়ে বিশ্ববিদ্যালয় শিক্ষকসহ আহত ১৫" class="lazyload img-loader">
<h2 class="title">
দুমকিতে কুকুরের কামড়ে বিশ্ববিদ্যালয় শিক্ষকসহ আহত ১৫
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130571" class="clk-item clk-item-regular py-2 ">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/kustia-20220724145234.jpg?width=130&amp;height=90" alt="আ.লীগ নেতাসহ দুজনকে গুলি করে খুন, ৫ জনের যাবজ্জীবন" class="lazyload img-loader">
<h2 class="title">
 আ.লীগ নেতাসহ দুজনকে গুলি করে খুন, ৫ জনের যাবজ্জীবন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130556" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/bbaria-20220724140458.jpg?width=130&amp;height=90" alt="ব্রাহ্মণবাড়িয়ায় বিদ্যুৎস্পৃষ্টে প্রাণ গেল শ্রমিকের" class="lazyload img-loader">
<h2 class="title">
ব্রাহ্মণবাড়িয়ায় বিদ্যুৎস্পৃষ্টে প্রাণ গেল শ্রমিকের
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130551" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/chuadanga1-20220724134633.jpg?width=130&amp;height=90" alt="চুয়াডাঙ্গায় বয়লার বিস্ফোরণে প্রাণ গেল শ্রমিকের" class="lazyload img-loader">
<h2 class="title">
চুয়াডাঙ্গায় বয়লার বিস্ফোরণে প্রাণ গেল শ্রমিকের
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130544" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/joypurhut-20220724132524.jpg?width=130&amp;height=90" alt="স্ত্রীকে খুনের ২০ বছর পর স্বামীর মৃত্যুদণ্ড" class="lazyload img-loader">
<h2 class="title">
স্ত্রীকে খুনের ২০ বছর পর স্বামীর মৃত্যুদণ্ড
</h2>
</a>
</div>
</div>
<div class="col-12 col-md-6 col-xl-4 d-none d-sm-flex">
<div class="clk-list clk-right">
<a href="<?= $siteoptions['web_url'] ?>/country/130529" class="clk-item clk-item-regular py-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/gaibanda-20220724121255.jpg?width=130&amp;height=90" alt="ফেসবুকে প্রেম, দুই সন্তানের মায়ের সঙ্গে স্কুলছাত্রের বিয়ে!" class="lazyload img-loader">
<h2 class="title">
ফেসবুকে প্রেম, দুই সন্তানের মায়ের সঙ্গে স্কুলছাত্রের বিয়ে!
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130522" class="clk-item clk-item-regular py-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/gazipur-20220724114944.jpg?width=130&amp;height=90" alt="গাজীপুরে শ্রমিকবাহী বাসে ট্রেনের ধাক্কা, নিহত বেড়ে ৪" class="lazyload img-loader">
<h2 class="title">
গাজীপুরে শ্রমিকবাহী বাসে ট্রেনের ধাক্কা, নিহত বেড়ে ৪
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130509" class="clk-item clk-item-regular py-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/satkhira-20220724104101.jpg?width=130&amp;height=90" alt="পশুর সঙ্গে বিকৃত যৌনাচার, দেখে ফেলায় বন্ধুর স্ত্রীকে খুন" class="lazyload img-loader">
<h2 class="title">
পশুর সঙ্গে বিকৃত যৌনাচার, দেখে ফেলায় বন্ধুর স্ত্রীকে খুন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130500" class="clk-item clk-item-regular py-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rajbari-20220724095732.jpg?width=130&amp;height=90" alt="উত্ত্যক্ত করায় গরু ব্যবসায়ীকে মেরে গোয়ালঘরে পুঁতে রাখলেন দম্পতি" class="lazyload img-loader">
<h2 class="title">
উত্ত্যক্ত করায় গরু ব্যবসায়ীকে মেরে গোয়ালঘরে পুঁতে রাখলেন দম্পতি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/country/130495" class="clk-item clk-item-regular py-2">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/gazipur-20220724091912.jpg?width=130&amp;height=90" alt="গাজীপুরে শ্রমিকবাহী বাসে ট্রেনের ধাক্কা, নিহত ৩" class="lazyload img-loader">
<h2 class="title">
গাজীপুরে শ্রমিকবাহী বাসে ট্রেনের ধাক্কা, নিহত ৩
</h2>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 custom-item">
<div class="category-header bangladesh-ch d-flex justify-content-between align-items-center politics__home mt-2">
<div class="heading custom-heading">
<p class="title bangladesh-lc">আপনার এলাকার খবর</p>
</div>
</div>
<div class="row mt-2" style="margin: 0">
<div class='col-12' style="padding: 5px 0">
<div class="form-group" style="margin: 0">
<select class="form-control" name="division" id="division">
<option value="">বিভাগ</option>
<option data-value="barishal" value="2">বরিশাল</option>
<option data-value="chattogram" value="3">চট্টগ্রাম</option>
<option data-value="dhaka" value="4">ঢাকা</option>
<option data-value="khulna" value="5">খুলনা</option>
<option data-value="rajshahi" value="6">রাজশাহী</option>
<option data-value="sylhet" value="7">সিলেট</option>
<option data-value="rangpur" value="8">রংপুর</option>
<option data-value="mymensingh" value="9">ময়মনসিংহ</option>
</select>
</div>
</div>
<div class='col-12' style="padding: 5px 0">
<div class="form-group" style="margin: 0">
<select class="form-control" name="district" id="district">
<option data-value="" value="">জেলা</option>
</select>
</div>
</div>
<div class="col-12" style="padding: 5px 0">
<div class="form-group" style="margin: 0">
<select class="form-control" name="upazila" id="upazila">
<option data-value="" value="">উপজেলা</option>
</select>
</div>
</div>
<div class="col-12" style="padding: 5px 0">
<button type="button" class="btn bg-primary dis-sea btn-block text-white" aria-label="Search">
খুঁজুন
<i class="fa fa-search ml-2" style="color: #FFF !important; height: 100%"></i>
</button>
</div>
</div>
<div class="advertisement mt-2">
<div id='div-gpt-ad-1624958658889-0' style='min-width: 300px; min-height: 250px; max-width: 300px'>
<script>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1624958658889-0');
                                });
                            </script>
</div>
</div>
</div>
</div>
</div>
<div class="bg-section-two sports-section-contents">
<div class="container pt-3 m-pt-2 pb-3 m-pb-2">
<div class="row">
<div class="col-lg-9 col-md-8">
<div class="category-header sports-ch d-flex justify-content-between align-items-center">
<div class="heading sports-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/sports" class="sports-lc">খেলা</a></p>
</div>
<div class="d-none d-sm-flex align-items-center">
<div class="sct-items" data-href="cricket">ক্রিকেট</div>
<div class="sct-items" data-href="football">ফুটবল</div>
<div class="sct-items active" data-href="sports-all">সকল</div>
</div>
<a href="<?= $siteoptions['web_url'] ?>/sports" class="d-none d-sm-flex ">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div>
<div class="row sports-all sports-item">
<div class="col-lg-8 col-12">
<div class="grid-fourth pt-2 m-pt-0">
<a href="<?= $siteoptions['web_url'] ?>/sports/cricket/130575" class="grid-fourth-item grid-fourth-item__1 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/india-cricket-2-20220724150821.jpg?width=330&amp;height=175" alt="বাইরের লিগে খেলার অনুমতি পাচ্ছেন কোহলিরা!" class="lazyload img-loader">
</div>
<h2>
বাইরের লিগে খেলার অনুমতি পাচ্ছেন কোহলিরা!
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/football/130567" class="grid-fourth-item grid-fourth-item__2 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/nuruzzaman-nayan-20220724143722.jpg?width=330&amp;height=175" alt="সবার চেয়ে এগিয়ে থাকতে বসুন্ধরা কোচের অস্ট্রেলিয়া যাত্রা" class="lazyload img-loader">
</div>
<h2>
সবার চেয়ে এগিয়ে থাকতে বসুন্ধরা কোচের অস্ট্রেলিয়া যাত্রা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/others/130557" class="grid-fourth-item grid-fourth-item__3 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/neeraj-chopra-20220724140715.jpg?width=330&amp;height=175" alt="ভারতকে ইতিহাসগড়া পদক এনে দিলেন নীরাজ" class="lazyload img-loader">
</div>
<h2>
ভারতকে ইতিহাসগড়া পদক এনে দিলেন নীরাজ
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/cricket/130550" class="grid-fourth-item grid-fourth-item__4 m-py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/shakib-al-hasan-20220724134601.jpg?width=330&amp;height=175" alt="সাকিবের চোখে ‘যোগ্য অধিনায়ক’ সোহান" class="lazyload img-loader">
</div>
<h2>
সাকিবের চোখে ‘যোগ্য অধিনায়ক’ সোহান
</h2>
</a>
</div>
</div>
<div class="col-lg-4 col-12 third-right d-none d-sm-flex">
<div class="regular-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/sports/cricket/130539" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/nurul-hasan-sohan-20220724125639.jpg?width=130&amp;height=90" alt="অধিনায়ক সোহান গর্বিত হলেও রোমাঞ্চিত নন" class="lazyload img-loader">
</div>
<h2 class="title">
অধিনায়ক সোহান গর্বিত হলেও রোমাঞ্চিত নন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/football/130515" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/raphinha-20220724110651.jpg?width=130&amp;height=90" alt="রাফিনিয়ার গোলে দাপট দেখিয়ে রিয়ালকে হারাল বার্সা" class="lazyload img-loader">
</div>
<h2 class="title">
রাফিনিয়ার গোলে দাপট দেখিয়ে রিয়ালকে হারাল বার্সা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/football/130503" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/haaland-20220724100606.jpg?width=130&amp;height=90" alt="অভিষেকের ১২ মিনিটেই গোল হালান্ডের, বায়ার্নকে হারাল সিটি" class="lazyload img-loader">
</div>
<h2 class="title">
অভিষেকের ১২ মিনিটেই গোল হালান্ডের, বায়ার্নকে হারাল সিটি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/football/130497" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/messi-barcelona-20220724092555.jpg?width=130&amp;height=90" alt="মেসির বার্সা অধ্যায় শেষ হয়ে যায়নি : লাপোর্তা" class="lazyload img-loader">
</div>
<h2 class="title">
মেসির বার্সা অধ্যায় শেষ হয়ে যায়নি : লাপোর্তা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/football/130485" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
 <img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/neymar-psg-20220724081930.jpg?width=130&amp;height=90" alt="নেইমারকে চাইছে রিয়াল মাদ্রিদ!" class="lazyload img-loader">
</div>
<h2 class="title">
নেইমারকে চাইছে রিয়াল মাদ্রিদ!
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/sports/130478" class="news-item news-item-regular py-2">
<div class="image-container d-flex d-lg-none">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/el-clasico-20220724071310.jpg?width=130&amp;height=90" alt="টিভিতে আজ দেখবেন এল ক্ল্যাসিকো" class="lazyload img-loader">
</div>
<h2 class="title">
টিভিতে আজ দেখবেন এল ক্ল্যাসিকো
</h2>
</a>
</div>
</div>
</div>
<div class="row cricket sports-item" style="display: none">
</div>
<div class="row football sports-item" style="display: none">
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 m-mt-2">
<div class="category-header education-ch d-flex justify-content-between align-items-center">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/education" class="education-lc">শিক্ষা</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/education" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/education/130563" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/7clg-202108011202131-20210804140256-20220724142536.jpg?width=330&amp;height=175" alt="২০ ক্রেডিটের বেশি মানোন্নয়ন দিতে পারবেন না সাত কলেজ শিক্ষার্থীরা" class="lazyload img-loader">
</div>
<h2 class="title">
২০ ক্রেডিটের বেশি মানোন্নয়ন দিতে পারবেন না সাত কলেজ শিক্ষার্থীরা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/education/130504" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/bcs-202103291716361-20220526232816-20220724102026.jpg?width=130&amp;height=90" alt="৪৩তম বিসিএসের লিখিত পরীক্ষা শুরু" class="lazyload img-loader">
</div>
<h2 class="title">
৪৩তম বিসিএসের লিখিত পরীক্ষা শুরু
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/education/130017" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/20-202207042150471-20220721163041.jpg?width=130&amp;height=90" alt="ই-রিকুইজিশনে ইবতেদায়ী মৌলভী ও ইবতেদায়ী শিক্ষক পদ সংযুক্তির দাবি" class="lazyload img-loader">
</div>
<h2 class="title">
ই-রিকুইজিশনে ইবতেদায়ী মৌলভী ও ইবতেদায়ী শিক্ষক পদ সংযুক্তির দাবি
</h2>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="container pt-3 m-pt-2 entertainment">
<div class="category-header entertainment-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/entertainment" class="entertainment-lc">বিনোদন</a></p>
</div>
<div class="d-none d-sm-flex align-items-center">
<div class="et-items" data-href="bollywood">বলিউড</div>
<div class="et-items" data-href="hollywood">হলিউড</div>
<div class="et-items" data-href="dhallywood">ঢালিউড</div>
<div class="et-items active" data-href="entertainment-all">সকল</div>
</div>
<a href="<?= $siteoptions['web_url'] ?>/entertainment" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div>
<div class="row entertainment-all entertainment-item">
<div class="col-lg-6 col-12 entertainment-left">
<div class="grid-entertainment pt-2">
<a href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130578" class="grid-entertainment-item grid-entertainment-item__1">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/apu-biswas-1-20220724151610.jpg?width=640&amp;height=335" alt="শাকিবের বিয়ে প্রসঙ্গে অপু বললেন, ‘আমিও করব’" class="lazyload img-loader">
</div>
<h2>
শাকিবের বিয়ে প্রসঙ্গে অপু বললেন, ‘আমিও করব’
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130561" class="grid-entertainment-item grid-entertainment-item__2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/dighi-ranbir-20220724142057.jpg?width=330&amp;height=175" alt="রণবীর কাপুরকে এনে দিলে সত্যিই বিয়ে করবেন দীঘি!" class="lazyload img-loader">
</div>
<h2>
রণবীর কাপুরকে এনে দিলে সত্যিই বিয়ে করবেন দীঘি!
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/130559" class="grid-entertainment-item grid-entertainment-item__3">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/ittadi-bappa-20220724141533.jpg?width=330&amp;height=175" alt="কাজী নজরুলকে নিয়ে ‘ইত্যাদি’, গাইলেন বাপ্পা-প্রিয়াংকা" class="lazyload img-loader">
</div>
<h2>
কাজী নজরুলকে নিয়ে ‘ইত্যাদি’, গাইলেন বাপ্পা-প্রিয়াংকা
</h2>
</a>
</div>
</div>
<div class="col-lg-3 col-md-6 entertainment-center">
<div class="alk-list">
<a href="<?= $siteoptions['web_url'] ?>/entertainment/130553" class="news-item-alk py-2 news-alk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/untitled-3-20220724135028.jpg?width=330&amp;height=175" alt="ক্রিকেট খেলতে গিয়ে মাঠেই মারা গেলেন অভিনেতা" class="lazyload img-loader">
</div>
<h2 class="title">
ক্রিকেট খেলতে গিয়ে মাঠেই মারা গেলেন অভিনেতা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130532" class="news-item-alk news-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/mim-mahi-20220724123228.jpg?width=130&amp;height=90" alt="মিমের ‘পরাণ’ দেখে যা বললেন মাহি ও তার স্বামী" class="lazyload img-loader">
</div>
<h2 class="title">
মিমের ‘পরাণ’ দেখে যা বললেন মাহি ও তার স্বামী
</h2>
</a>
 <a href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130521" class="news-item-alk news-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/hawa-cover-20220724114726.jpg?width=130&amp;height=90" alt="ক্যাম্পাসে ক্যাম্পাসে ঘুরছে ‘হাওয়া’ টিম" class="lazyload img-loader">
</div>
<h2 class="title">
ক্যাম্পাসে ক্যাম্পাসে ঘুরছে ‘হাওয়া’ টিম
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130453" class="news-item-alk news-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/pori-razz-1-20220723210736.jpg?width=130&amp;height=90" alt="রাজকে জড়িয়ে ধরে কাঁদলেন পরীমণি" class="lazyload img-loader">
</div>
<h2 class="title">
রাজকে জড়িয়ে ধরে কাঁদলেন পরীমণি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/bollywood/130447" class="news-item-alk news-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/ranbir-kapoor-1-20220723205011.jpg?width=130&amp;height=90" alt="রণবীরের ১৫০ কোটির সিনেমা প্রথম দিনে কত আয় করল?" class="lazyload img-loader">
</div>
<h2 class="title">
রণবীরের ১৫০ কোটির সিনেমা প্রথম দিনে কত আয় করল?
</h2>
</a>
</div>
</div>
<div class="col-lg-3 col-md-6 entertainment-right d-none d-sm-flex">
<div class="alk-list">
<a href="<?= $siteoptions['web_url'] ?>/entertainment/dhallywood/130422" class="news-item-alk py-2 news-alk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/porimoni-1-20220723185538.jpg?width=330&amp;height=175" alt="স্বামীর ‘পরাণ’ দেখতে সিনেমা হলে অন্তঃসত্ত্বা পরীমণি" class="lazyload img-loader">
</div>
<h2 class="title">
স্বামীর ‘পরাণ’ দেখতে সিনেমা হলে অন্তঃসত্ত্বা পরীমণি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/130410" class="news-item-alk news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/sreelekha-arpita-1-20220723181834.jpg?width=130&amp;height=90" alt="অভিনেত্রীর ফ্ল্যাট থেকে বিপুল অর্থ উদ্ধার, যা বললেন শ্রীলেখা" class="lazyload img-loader">
</div>
<h2 class="title">
অভিনেত্রীর ফ্ল্যাট থেকে বিপুল অর্থ উদ্ধার, যা বললেন শ্রীলেখা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/130397" class="news-item-alk news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/arpita-1-20220723170806.jpg?width=130&amp;height=90" alt="বিপুল অর্থসহ আটক, মন্ত্রীর ঘনিষ্ঠ কে এই অর্পিতা?" class="lazyload img-loader">
</div>
<h2 class="title">
বিপুল অর্থসহ আটক, মন্ত্রীর ঘনিষ্ঠ কে এই অর্পিতা?
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/130388" class="news-item-alk news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/rupali-1-20220723163707.jpg?width=130&amp;height=90" alt="প্রযোজকের কুপ্রস্তাব শুনে সিনেমা ছাড়েন রূপালি" class="lazyload img-loader">
</div>
<h2 class="title">
প্রযোজকের কুপ্রস্তাব শুনে সিনেমা ছাড়েন রূপালি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/entertainment/130375" class="news-item-alk news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/cineplex-1-20220723154958.jpg?width=130&amp;height=90" alt="সিনেপ্লেক্স এবার সিলেটে, চালু হচ্ছে ‘হাওয়া’ দিয়ে" class="lazyload img-loader">
</div>
<h2 class="title">
সিনেপ্লেক্স এবার সিলেটে, চালু হচ্ছে ‘হাওয়া’ দিয়ে
</h2>
</a>
</div>
</div>
</div>
<div class="row bollywood entertainment-item" style="display: none">
</div>
<div class="row hollywood entertainment-item" style="display: none">
</div>
<div class="row dhallywood entertainment-item" style="display: none">
</div>
</div>
</div>
<div class="container pt-3 m-pt-2">
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="category-header international-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading international-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/international" class="international-lc">আন্তর্জাতিক</a>
</p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/international" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="row border-right international-articles">
<div class="col-12 col-md-12 col-xl-6">
<div class="row type-sect-three-left">
<div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
<a href="<?= $siteoptions['web_url'] ?>/international/130573" class="news-item news-item-box pt-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/india-223-20220724150638.jpg?width=330&amp;height=90" alt="ভারতে করোনায় আরও ৩৬ মৃত্যু, শনাক্ত ২০ হাজারের বেশি" class="lazyload img-loader">
</div>
<h2 class="title">
ভারতে করোনায় আরও ৩৬ মৃত্যু, শনাক্ত ২০ হাজারের বেশি
</h2>
</a>
</div>
<div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
<a href="<?= $siteoptions['web_url'] ?>/international/130548" class="news-item news-item-box pt-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/monkeypox-8-20220724132701.jpg?width=330&amp;height=90" alt="কেরালার পর এবার দিল্লি, ভারতে ৪র্থ মাঙ্কিপক্স রোগী শনাক্ত" class="lazyload img-loader">
</div>
<h2 class="title">
কেরালার পর এবার দিল্লি, ভারতে ৪র্থ মাঙ্কিপক্স রোগী শনাক্ত
</h2>
</a>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-xl-6">
<div class="clk-list clk-center">
<a href="<?= $siteoptions['web_url'] ?>/international/130537" class="clk-item clk-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/sgiraj-city-iran-20220724134343.jpg?width=130&amp;height=90" alt="ইরান: পুলিশ কর্মকর্তাকে খুনের স্থানেই জনসমক্ষে ফাঁসি কার্যকর" class="lazyload img-loader">
</div>
<h2 class="title">
ইরান: পুলিশ কর্মকর্তাকে খুনের স্থানেই জনসমক্ষে ফাঁসি কার্যকর
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/international/130525" class="clk-item clk-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/putin-47-20220724115502.jpg?width=130&amp;height=90" alt="রাশিয়ার বিরুদ্ধে নিষেধাজ্ঞা ব্যর্থ হয়েছে : হাঙ্গেরি" class="lazyload img-loader">
</div>
<h2 class="title">
রাশিয়ার বিরুদ্ধে নিষেধাজ্ঞা ব্যর্থ হয়েছে : হাঙ্গেরি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/international/130514" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/imran-khan-26-20220724105708.jpg?width=130&amp;height=90" alt="শ্রীলঙ্কার মতো সংকটের দ্বারপ্রান্তে পাকিস্তান : ইমরান খান" class="lazyload img-loader">
</div>
<h2 class="title">
শ্রীলঙ্কার মতো সংকটের দ্বারপ্রান্তে পাকিস্তান : ইমরান খান
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/international/130501" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/ukraine-256-20220724095855.jpg?width=130&amp;height=90" alt="রুশ সেনাদের অবস্থান জানতে নাগরিকদের দ্বারস্থ ইউক্রেন" class="lazyload img-loader">
</div>
<h2 class="title">
রুশ সেনাদের অবস্থান জানতে নাগরিকদের দ্বারস্থ ইউক্রেন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/international/130492" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/brazil-20220724084937.jpg?width=130&amp;height=90" alt="যোগ্য পাত্র পাচ্ছেন না ব্রাজিলের তরুণীরা" class="lazyload img-loader">
</div>
<h2 class="title">
যোগ্য পাত্র পাচ্ছেন না ব্রাজিলের তরুণীরা
</h2>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="category-header economy-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading economy-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/economy" class="economy-lc">অর্থনীতি</a></p>
</div>
<div class="d-none d-sm-flex align-items-center">
<div class="ect-items" data-href="bank">ব্যাংক</div>
<div class="ect-items" data-href="insurance">বীমা</div>
<div class="ect-items" data-href="stock-market">শেয়ার বাজার</div>
<div class="ect-items active" data-href="economy-all">সকল</div>
</div>
<a href="<?= $siteoptions['web_url'] ?>/economy" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="economy-articles">
<div class="row economy-all economy-item">
<div class="col-12 col-md-12 col-xl-6">
<div class="row type-sect-three-left">
<div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
<a href="<?= $siteoptions['web_url'] ?>/economy/stock-market/130549" class="news-item news-item-box pt-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/matin-spining-20220724134310.jpg?width=330&amp;height=90" alt="আরও এক ইউনিটের উৎপাদন শুরুর ঘোষণা মতিন স্পিনিংয়ের" class="lazyload img-loader">
</div>
<h2 class="title">
আরও এক ইউনিটের উৎপাদন শুরুর ঘোষণা মতিন স্পিনিংয়ের
</h2>
</a>
</div>
<div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
<a href="<?= $siteoptions['web_url'] ?>/economy/130538" class="news-item news-item-box pt-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/cpd-20220724125249.jpg?width=330&amp;height=90" alt="সংকট স্বল্পমেয়াদী নয়, সহজে মুক্তি মিলবে না" class="lazyload img-loader">
<i class="fa fa-play-circle video-icon"></i>
</div>
<h2 class="title">
সংকট স্বল্পমেয়াদী নয়, সহজে মুক্তি মিলবে না
</h2>
</a>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-xl-6">
<div class="clk-list clk-center">
<a href="<?= $siteoptions['web_url'] ?>/economy/stock-market/130511" class="clk-item clk-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/libra-infusions-ltd-20220724105147.jpg?width=130&amp;height=90" alt="সাড়ে ৭ লাখ টাকা লভ্যাংশ দেবে লিবরা ইনফিউশন" class="lazyload img-loader">
</div>
<h2 class="title">
সাড়ে ৭ লাখ টাকা লভ্যাংশ দেবে লিবরা ইনফিউশন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/economy/130480" class="clk-item clk-item-regular py-2 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/salman-f-rahman-20220724073127.jpg?width=130&amp;height=90" alt="বিদ্যুৎ সাশ্রয়ের পাশাপাশি বিলাসী পণ্য আমদানি কমানোর অনুরোধ" class="lazyload img-loader">
</div>
<h2 class="title">
বিদ্যুৎ সাশ্রয়ের পাশাপাশি বিলাসী পণ্য আমদানি কমানোর অনুরোধ
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/economy/129883" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/11sibl-20220721031005.jpg?width=130&amp;height=90" alt="বিদেশ থেকে মোবাইলে সোশ্যাল ইসলামী ব্যাংকে অ্যাকাউন্ট খোলা যাবে" class="lazyload img-loader">
</div>
<h2 class="title">
বিদেশ থেকে মোবাইলে সোশ্যাল ইসলামী ব্যাংকে অ্যাকাউন্ট খোলা যাবে
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/economy/stock-market/129713" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news-20220720110656.jpg?width=130&amp;height=90" alt="মুনাফা কমেছে ট্রাস্ট ব্যাংক ও ইসলামিক ফাইন্যান্সের" class="lazyload img-loader">
</div>
<h2 class="title">
মুনাফা কমেছে ট্রাস্ট ব্যাংক ও ইসলামিক ফাইন্যান্সের
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/economy/stock-market/129667" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/07-20220720005025.jpg?width=130&amp;height=90" alt="আইওএসকোর এশিয়া প্যাসিফিকের ভাইস চেয়ার হলেন শিবলী রুবাইয়াত" class="lazyload img-loader">
</div>
<h2 class="title">
আইওএসকোর এশিয়া প্যাসিফিকের ভাইস চেয়ার হলেন শিবলী রুবাইয়াত
</h2>
</a>
</div>
</div>
</div>
<div class="row bank economy-item" style="display: none">
</div>
<div class="row insurance economy-item" style="display: none">
</div>
<div class="row stock-market economy-item" style="display: none">
</div>
</div>
</div>
</div>
</div>
<div class="bg-section-two">
<div class="container pt-3 m-pt-2">
<div class="row">
<div class="col-md-3">
<div class="category-header law-courts-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/health" class="law-courts-lc">স্বাস্থ্য</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/health" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/health/130285" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news-20220723081543.jpg?width=330&amp;height=175" alt="এসে গেল টিকা, বিদায় নেবে ম্যালেরিয়া" class="lazyload img-loader">
</div>
<h2 class="title">
এসে গেল টিকা, বিদায় নেবে ম্যালেরিয়া
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/health/130185" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/bsmmmu-vc-20220722144729.jpg?width=130&amp;height=90" alt="বঙ্গবন্ধুর সমাধিতে বিএসএমএমইউ ভিসির শ্রদ্ধা" class="lazyload img-loader">
</div>
<h2 class="title">
বঙ্গবন্ধুর সমাধিতে বিএসএমএমইউ ভিসির শ্রদ্ধা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/health/130150" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/1041-20220722104049.jpg?width=130&amp;height=90" alt="যে তিন ভুলে পেট ফাঁপে, এড়াতে যা করবেন " class="lazyload img-loader">
</div>
<h2 class="title">
যে তিন ভুলে পেট ফাঁপে, এড়াতে যা করবেন 
</h2>
</a>
</div>
</div>
<div class="col-md-6 probash">
<div class="row">
<div class="col-sm-12">
<div class="category-header probash-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/probash" class="probash-lc">প্রবাস</a></p>
</div>
<div class="px-2 menu-scroll probash-menu-scroll menu-scroll-left inactive" style="font-size: 22px;"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></div>
<div class="d-none d-sm-flex align-items-center overflow-hidden probash-country-items" style="white-space: nowrap;">
<div class="ct-items" data-href="usa">যুক্তরাষ্ট্র</div>
<div class="ct-items" data-href="canada">কানাডা</div>
<div class="ct-items" data-href="uk">যুক্তরাজ্য</div>
<div class="ct-items" data-href="uae">সংযুক্ত আরব আমিরাত</div>
<div class="ct-items" data-href="spain">স্পেন</div>
<div class="ct-items" data-href="portugal">পর্তুগাল</div>
<div class="ct-items" data-href="italy">ইতালি</div>
<div class="ct-items" data-href="malaysia">মালয়েশিয়া</div>
<div class="ct-items" data-href="qatar">কাতার</div>
<div class="ct-items" data-href="oman">ওমান</div>
<div class="ct-items" data-href="kuwait">কুয়েত</div>
<div class="ct-items active" data-href="probash-all">সকল</div>
</div>
 <div class="px-2 menu-scroll probash-menu-scroll menu-scroll-right active" style="font-size: 22px;"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></div>
<a href="<?= $siteoptions['web_url'] ?>/probash" class="d-none d-sm-flex" style="white-space: nowrap;">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
</div>
<div class="col-sm-12 m-px-0 third-right pt-1">
<div class="regular-list scaled">
<div class="row probash-all country-item">
<a href="<?= $siteoptions['web_url'] ?>/probash/130475" class="news-item news-item-regular py-2 col-md-6 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/untitled-11-20220724060344.jpg?width=130&amp;height=90" alt="বাংলাদেশ প্রেসক্লাব ইউএইর অভিষেক সফলে পাশে থাকবে কমিউনিটি" class="lazyload img-loader">
</div>
<h2 class="title">
বাংলাদেশ প্রেসক্লাব ইউএইর অভিষেক সফলে পাশে থাকবে কমিউনিটি
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/130326" class="news-item news-item-regular py-2 col-md-6 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/1219-20220723121825.jpg?width=130&amp;height=90" alt="টরন্টোতে কবি ও ছড়াকার জিন্নাহ চৌধুরীর ছড়া আড্ডা" class="lazyload img-loader">
</div>
<h2 class="title">
টরন্টোতে কবি ও ছড়াকার জিন্নাহ চৌধুরীর ছড়া আড্ডা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/130220" class="news-item news-item-regular py-2 col-md-6 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/uae-visa-20220722182133.jpg?width=130&amp;height=90" alt="আমিরাতে গোল্ডেন ভিসা পেল বাংলাদেশি শিক্ষার্থী তাওহিদুল" class="lazyload img-loader">
</div>
<h2 class="title">
আমিরাতে গোল্ডেন ভিসা পেল বাংলাদেশি শিক্ষার্থী তাওহিদুল
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/130216" class="news-item news-item-regular py-2 col-md-6 ">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/uk-20220722180246.jpg?width=130&amp;height=90" alt="প্রধানমন্ত্রীর ত্রাণ তহবিলে যুক্তরাজ্য আ.লীগের ২৫ লাখ টাকা অনুদান" class="lazyload img-loader">
</div>
<h2 class="title">
প্রধানমন্ত্রীর ত্রাণ তহবিলে যুক্তরাজ্য আ.লীগের ২৫ লাখ টাকা অনুদান
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/130190" class="news-item news-item-regular py-2 col-md-6 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/uae-restaurent-20220722150941.jpg?width=130&amp;height=90" alt="আমিরাতে বাংলাদেশি মালিকানাধীন আল মাইদা রেস্টুরেন্ট উদ্বোধন" class="lazyload img-loader">
</div>
<h2 class="title">
আমিরাতে বাংলাদেশি মালিকানাধীন আল মাইদা রেস্টুরেন্ট উদ্বোধন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/130107" class="news-item news-item-regular py-2 col-md-6 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/untitled-1-20220721233407.jpg?width=130&amp;height=90" alt="জিম্বাবুয়েতে বাংলাদেশের রাষ্ট্রদূতের পরিচয়পত্র পেশ" class="lazyload img-loader">
</div>
<h2 class="title">
জিম্বাবুয়েতে বাংলাদেশের রাষ্ট্রদূতের পরিচয়পত্র পেশ
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/129680" class="news-item news-item-regular py-2 col-md-6 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news1-20220720072958.jpg?width=130&amp;height=90" alt="দক্ষিণ আফ্রিকায় প্রবাসীদের ঈদ পুনর্মিলনী অনুষ্ঠিত" class="lazyload img-loader">
</div>
<h2 class="title">
দক্ষিণ আফ্রিকায় প্রবাসীদের ঈদ পুনর্মিলনী অনুষ্ঠিত
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/probash/129645" class="news-item news-item-regular py-2 col-md-6 d-none d-sm-flex">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/276044835-271006338546479-6-20220719212305.jpg?width=130&amp;height=90" alt="লিবিয়ার বেনগাজিতে প্রবাসীদের কনসুলার সেবা দেবে দূতাবাস" class="lazyload img-loader">
</div>
<h2 class="title">
লিবিয়ার বেনগাজিতে প্রবাসীদের কনসুলার সেবা দেবে দূতাবাস
</h2>
</a>
</div>
<div class="row usa country-item" style="display: none"></div>
<div class="row canada country-item" style="display: none"></div>
<div class="row uk country-item" style="display: none"></div>
<div class="row uae country-item" style="display: none"></div>
<div class="row spain country-item" style="display: none"></div>
<div class="row portugal country-item" style="display: none"></div>
<div class="row italy country-item" style="display: none"></div>
<div class="row malaysia country-item" style="display: none"></div>
<div class="row qatar country-item" style="display: none"></div>
<div class="row oman country-item" style="display: none"></div>
<div class="row kuwait country-item" style="display: none"></div>
</div>
</div>
</div>
</div>
<div class="col-md-3">
<div class="category-header law-courts-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/law-courts" class="law-courts-lc">আইন-আদালত</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/law-courts" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/law-courts/129988" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/hero-alom-1-202202101859401-20220721145259.jpg?width=330&amp;height=175" alt="অশ্লীল অঙ্গভঙ্গি বন্ধে হিরো আলমকে লিগ্যাল নোটিশ" class="lazyload img-loader">
<i class="fa fa-play-circle video-icon"></i>
</div>
<h2 class="title">
অশ্লীল অঙ্গভঙ্গি বন্ধে হিরো আলমকে লিগ্যাল নোটিশ
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/law-courts/129755" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/news-20220720135525.jpg?width=130&amp;height=90" alt="শিশু ধর্ষণের দায়ে চট্টগ্রামে একজনের যাবজ্জীবন কারাদণ্ড" class="lazyload img-loader">
</div>
<h2 class="title">
শিশু ধর্ষণের দায়ে চট্টগ্রামে একজনের যাবজ্জীবন কারাদণ্ড
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/law-courts/129747" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/nazrul-202205250724191-20220720132109.jpg?width=130&amp;height=90" alt="কাজী নজরুলকে জাতীয় কবি ঘোষণা করে গেজেট প্রকাশ করতে রুল" class="lazyload img-loader">
</div>
<h2 class="title">
কাজী নজরুলকে জাতীয় কবি ঘোষণা করে গেজেট প্রকাশ করতে রুল
</h2>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="py-2 ocs-section exclusive-section">
<div class="container pt-3 m-pt-2">
<div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading lifestyle-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/exclusive" class="lifestyle-lc">এক্সক্লুসিভ</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/exclusive">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="row ocs-items mt-2">
<div class="col-sm-3 m-scroll-item align-items-stretch d-flex">
<a class="ocs card" href="<?= $siteoptions['web_url'] ?>/exclusive/124146">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" class="lazyload img-loader card-img-top" alt="তথ্য গোপন করে আইন মন্ত্রণালয়ের মতামত বাগিয়ে নিল আইএমইডি" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022June/557-20220621214356.jpg?width=330&amp;height=175">
</div>
<div class="card-body">
<h2 class="card-title">
তথ্য গোপন করে আইন মন্ত্রণালয়ের মতামত বাগিয়ে নিল আইএমইডি
</h2>
</div>
</a>
</div>
<div class="col-sm-3 m-scroll-item align-items-stretch d-none d-sm-flex">
<a class="ocs card" href="<?= $siteoptions['web_url'] ?>/exclusive/122090">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" class="lazyload img-loader card-img-top" alt="জাহাজীকরণ হচ্ছে না H₂O₂, আইসিডিতে ১০৯ কনটেইনার" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022June/dp-chtt-01-20220612175503.jpg?width=330&amp;height=175">
</div>
<div class="card-body">
<h2 class="card-title">
জাহাজীকরণ হচ্ছে না H₂O₂, আইসিডিতে ১০৯ কনটেইনার
</h2>
</div>
</a>
</div>
<div class="col-sm-3 m-scroll-item align-items-stretch d-none d-sm-flex">
<a class="ocs card" href="<?= $siteoptions['web_url'] ?>/exclusive/121049">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" class="lazyload img-loader card-img-top" alt="ভুল তথ্যে ‘ভুল টিম’ পাঠিয়েছিল ফায়ার সার্ভিস" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022June/dp-h2o2-06-20220608102805.jpg?width=330&amp;height=175">

</div>
<div class="card-body">
<h2 class="card-title">
ভুল তথ্যে ‘ভুল টিম’ পাঠিয়েছিল ফায়ার সার্ভিস
</h2>
</div>
</a>
</div>
<div class="col-sm-3 m-scroll-item align-items-stretch d-none d-sm-flex">
<a class="ocs card" href="<?= $siteoptions['web_url'] ?>/exclusive/120835">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" class="lazyload img-loader card-img-top" alt="বিমানের বকেয়া ৩০৯২ কোটি, আদায়ে দুদকের তোড়জোড়" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022June/dp-bb-01-20220607123038.jpg?width=330&amp;height=175">
</div>
<div class="card-body">
<h2 class="card-title">
বিমানের বকেয়া ৩০৯২ কোটি, আদায়ে দুদকের তোড়জোড়
</h2>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="container pt-3 m-pt-2 pb-3">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading lifestyle-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/lifestyle" class="lifestyle-lc">লাইফস্টাইল</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/lifestyle" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/lifestyle/130534" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/relationship-20220724124123.jpg?width=330&amp;height=175" alt="যেসব পুরুষ কখনো ভালোবাসা পায় না" class="lazyload img-loader">
</div>
<h2 class="title">
যেসব পুরুষ কখনো ভালোবাসা পায় না
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/lifestyle/130486" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/double-chin-20220724081951.jpg?width=130&amp;height=90" alt="ইংরেজি যে দুটি অক্ষর উচ্চারণে কমবে গলার মেদ" class="lazyload img-loader">
</div>
<h2 class="title">
ইংরেজি যে দুটি অক্ষর উচ্চারণে কমবে গলার মেদ
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/lifestyle/130382" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/chicken-1-20220723162401.jpg?width=130&amp;height=90" alt="চিকেন মাসালা ফ্রাই তৈরির রেসিপি" class="lazyload img-loader">
</div>
<h2 class="title">
চিকেন মাসালা ফ্রাই তৈরির রেসিপি
</h2>
</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="category-header technology-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/technology" class="technology-lc">তথ্যপ্রযুক্তি</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/technology" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/technology/130499" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/reels-20220724093840.jpg?width=330&amp;height=175" alt="আরও আকর্ষণীয় হচ্ছে ইনস্টাগ্রাম রিলস" class="lazyload img-loader">
</div>
<h2 class="title">
আরও আকর্ষণীয় হচ্ছে ইনস্টাগ্রাম রিলস
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/technology/130498" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/black-20220724093834.jpg?width=130&amp;height=90" alt="কৃত্রিম বুদ্ধিমত্তার অনুভূতির দাবি করা প্রকৌশলীর চাকরি খেলো গুগল" class="lazyload img-loader">
</div>
<h2 class="title">
কৃত্রিম বুদ্ধিমত্তার অনুভূতির দাবি করা প্রকৌশলীর চাকরি খেলো গুগল
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/technology/130412" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/gp-house-20220723182420.jpg?width=130&amp;height=90" alt="বিদ্যুৎ সাশ্রয়ে গ্রামীণফোনে ‘ওয়ার্ক ফ্রম হোম’ চালু" class="lazyload img-loader">
</div>
<h2 class="title">
বিদ্যুৎ সাশ্রয়ে গ্রামীণফোনে ‘ওয়ার্ক ফ্রম হোম’ চালু
</h2>
</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="category-header religion-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading islam-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/religion" class="religion-lc">ধর্ম</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/religion" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/religion/130546" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/pryer-20220724132548.jpg?width=330&amp;height=175" alt="সিজদায়ে তেলাওয়াত : এক সিজদাতে সবগুলোর নিয়ত করলে হবে কি?" class="lazyload img-loader">
</div>
<h2 class="title">
সিজদায়ে তেলাওয়াত : এক সিজদাতে সবগুলোর নিয়ত করলে হবে কি?
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/religion/130394" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/untitled-1-20220723170737.jpg?width=130&amp;height=90" alt="হঠাৎ অশ্লীল কিছু চোখে পড়লে যে দোয়া পড়বেন" class="lazyload img-loader">
</div>
<h2 class="title">
হঠাৎ অশ্লীল কিছু চোখে পড়লে যে দোয়া পড়বেন
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/religion/130339" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/husbendwaif-20220723132606.jpg?width=130&amp;height=90" alt="একাধিক স্ত্রীকে নিয়ে একরুমে ঘুমানো জায়েজ কি?" class="lazyload img-loader">
</div>
<h2 class="title">
একাধিক স্ত্রীকে নিয়ে একরুমে ঘুমানো জায়েজ কি?
</h2>
</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="category-header tourism-ch d-flex justify-content-between align-items-center mt-2">
<div class="heading custom-heading">
<p class="title"><a href="<?= $siteoptions['web_url'] ?>/jobs-career" class="tourism-lc">জবস</a></p>
</div>
<a href="<?= $siteoptions['web_url'] ?>/jobs-career" class="d-none d-sm-flex">
<div class="read-more d-flex justify-content-end align-items-center">
<p>আরও খবর</p>
<p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
</div>
</a>
</div>
<div class="blk-list scaled">
<a href="<?= $siteoptions['web_url'] ?>/jobs-career/130560" class="news-item-blk py-2 news-blk-image">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/hot-jobs-20220630122655-20220724141701.jpg?width=330&amp;height=175" alt="মাগুরা গ্রুপে চাকরি সুযোগ, কর্মী হিসেবে পাবেন অনেক সুবিধা" class="lazyload img-loader">
</div>
<h2 class="title">
মাগুরা গ্রুপে চাকরি সুযোগ, কর্মী হিসেবে পাবেন অনেক সুবিধা
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/jobs-career/130545" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/re-20220522075057-20220604104616-20220611123640-20220724132545.jpg?width=130&amp;height=90" alt="চাকরি দেওয়ার জন্য লোক খুঁজছে মেঘনা গ্রুপ" class="lazyload img-loader">
</div>
<h2 class="title">
চাকরি দেওয়ার জন্য লোক খুঁজছে মেঘনা গ্রুপ
</h2>
</a>
<a href="<?= $siteoptions['web_url'] ?>/jobs-career/130520" class="news-item news-item-regular py-2">
<div class="image-container">
<img src="<?= $siteoptions['web_resource']?>/media/common/placeholder.jpg" data-src="<?= $siteoptions['web_url'] ?>/media/imgAll/BG/2022July/triplover-20210821114111-20220724114236.jpg?width=130&amp;height=90" alt="ট্রিপলাভারে চাকরির সুযোগ, যোগ্যতা স্নাতক পাস" class="lazyload img-loader">
</div>
<h2 class="title">
ট্রিপলাভারে চাকরির সুযোগ, যোগ্যতা স্নাতক পাস
</h2>
</a>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
<footer data-nosnippet class="d-print-none" style="background: #072b3c; padding-bottom: 90px;">
<div class="footer-top py-3 bg-section-two" style="border-top: 3px solid">
<div class="container">
<div class="footer-top-items footer-mv d-flex align-items-center justify-content-between">
<div class="footer-logo d-none d-lg-flex">
<a href="/">
<img style="max-width: 200px;" src="<?= $siteoptions['web_url'] ?>/media/common/dhaka-post-logo.svg" alt="<?= $siteoptions['web_name']?>" />
</a>
</div>
<div class="editor">
<p>সম্পাদক: মহিউদ্দিন সরকার</p>
</div>
</div>
</div>
</div>
<div class="footer-bottom pt-3" style="background: #072b3c">
<div class="container text-white">
<div class="footerNewLinks text-center">
 <a href="<?= $siteoptions['web_url'] ?>/privacy" class="text-white">গোপনীয়তার নীতি</a>
<a href="<?= $siteoptions['web_url'] ?>/terms-of-use" class="text-white">ব্যবহারের শর্তাবলি</a>
<a href="<?= $siteoptions['web_url'] ?>/about-us" class="text-white">আমাদের সম্পর্কে</a>
<a href="<?= $siteoptions['web_url'] ?>/team" class="text-white">আমরা</a>
<a href="<?= $siteoptions['web_url'] ?>/contact" class="text-white">যোগাযোগ</a>
<a href="<?= $siteoptions['web_url'] ?>/archive" class="text-white">আর্কাইভ</a>
<a href="<?= $siteoptions['web_url'] ?>/advertise" class="text-white">বিজ্ঞাপন</a>
</div>
<div class="footerNewAddress text-center py-3">
<p class="text-white">৯৫ সোহরাওয়ার্দী এভিনিউ, বারিধারা ডিপ্লোমেটিক জোন, ঢাকা ১২১২</p>
<p>
<a href="tel:+8809613678678" aria-label="Telephone" class="text-white" target="_blank" rel="nofollow noopener">
<abbr title="Phone"><i class="fa fa-phone"></i> </abbr>&nbsp;+৮৮০ ৯৬১৩ ৬৭৮৬৭৮<br>
</a>
</p>
<p>
<a href="tel:+8801313767742" aria-label="Mobile" class="text-white" target="_blank" rel="nofollow noopener">
<abbr title="Mobile"><i class="fa fa-mobile"></i> </abbr>&nbsp;+৮৮০ ১৩১৩ ৭৬৭৭৪২<br>
</a>
</p>
<p>
<a href="https://wa.me/8801777707600" aria-label="Whatsapp" class="text-white" target="_blank" rel="nofollow noopener">
<abbr title="WhatsApp"><i class="fa fa-whatsapp"></i> </abbr>&nbsp;+৮৮০ ১৭৭৭ ৭০৭৬০০<br>
</a>
</p>
<p>
<a href="/cdn-cgi/l/email-protection#2d44434b426d49454c464c5d425e59034e4240" aria-label="Email" class="text-white" target="_blank" rel="nofollow noopener">
<abbr title="Mail"><i class="fa fa-envelope-o"></i> </abbr>&nbsp;<span class="__cf_email__" data-cfemail="6f060109002f0b070e040e1f001c1b410c0002">[email&#160;protected]</span><br>
</a>
</p>
</div>
<div class="footerText text-white">
<h1><?= $siteoptions['web_name']?> is one of the most popular and reliable Bangla News publishers. </h1>
<p>It is the fastest-growing Bangla news media that provides accurate and objective news within the
shortest possible time. <?= $siteoptions['web_name']?> intends to cover its reach throughout every district of the
country, also global news of every segment such as politics, economics, sports, entertainment,
education, information and technology, features, lifestyle, and columns. <?= $siteoptions['web_name']?> is owned by
Bijoy Bangla Media Limited (BBML) and sister concern of the
US Bangla Group of Companies.</p>
</div>
</div>
</div>
</footer>
<style>
    .ats-overlay-bottom-wrapper-rendered, #av-container #av-inner #gui #close-btn, #av-close-btn {
        z-index: 1000 !important;
    }

    .lg-start-zoom {
        background: black;
    }

    .footerNewLinks a {
        display: inline-block;
        margin: 0 15px;
    }

    .footerNewAddress p {
        display: inline-block;
        margin: 0 15px;
    }

    .footerNewAddress a abbr {
        text-decoration: none;
    }

    .footerText {
        border-top: 1px solid #20353e;
        padding-top: 10px;
        margin-bottom: 15px;
        text-align: justify;
    }

    .footerText h1 {
        display: inline;
        font-size: 15px;
        line-height: 1.3;
        font-weight: normal;
    }

    .footerText p {
        display: inline;
        font-size: 15px;
        line-height: 1.3;
        font-weight: normal;
    }

    /* Tablet desktop :768px. */
    @media (min-width: 768px) and (max-width: 991px) {
        .footer-link {
            display: flex;
            justify-content: center;
        }

        .footer-link a {
            margin: 0 10px;
        }

    }

    /* small mobile :320px. */
    @media (max-width: 767px) {
        .footer-link {
            display: flex;
            justify-content: center;
            flex-flow: wrap;
        }

        .footer-link a {
            margin: 0 10px;
        }

        .footerNewLinks a {
            margin: 0 10px;
            margin-bottom: 5px;
        }

        .footerNewAddress p {
            margin: 0 3px;
            margin-bottom: 10px;
        }

    }

    /* Large Mobile :480px. */
    @media  only screen and (min-width: 480px) and (max-width: 767px) {
        .container {
            width: 450px
        }

        .footer-link {
            display: flex;
            justify-content: center;
            flex-flow: wrap;
        }

        .footer-link a {
            margin: 0 10px;
        }

        .footerNewLinks a {
            margin: 0 10px;
            margin-bottom: 5px;
        }

        .footerNewAddress p {
            margin: 0 3px;
            margin-bottom: 10px;
        }

    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script async src="<?= $siteoptions['web_url'] ?>/assets/common/js/loader.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
        let economyItems = document.querySelectorAll('.economy-item');
        let ectItems = document.querySelectorAll('.ect-items');
        ectItems.forEach(item => {
            item.addEventListener('click', () => {
                ectItems.forEach(item => {
                    item.classList.remove('active');
                });
                item.classList.add('active');
                let data = item.getAttribute('data-href');

                document.querySelectorAll('.economy-item').forEach(item => {
                    item.style.display = "none";
                });

                let economy = document.querySelector('.' + data);
                economy.style.display = 'flex';

                if (economy.children.length === 0) {
                    requestEconomyContent(data);
                }

            });
        });

        let sportsItems = document.querySelectorAll('.sports-item');
        let sctItems = document.querySelectorAll('.sct-items');
        sctItems.forEach(item => {
            item.addEventListener('click', () => {
                sctItems.forEach(item => {
                    item.classList.remove('active');
                });
                item.classList.add('active');
                let data = item.getAttribute('data-href');

                document.querySelectorAll('.sports-item').forEach(item => {
                    item.style.display = "none";
                });

                let sports = document.querySelector('.' + data);
                sports.style.display = 'flex';

                if (sports.children.length === 0) {
                    requestSportsContent(data);
                }

            });
        });

        const probashButtonRight = document.querySelector('.probash-menu-scroll.menu-scroll-right');
        const probashButtonLeft = document.querySelector('.probash-menu-scroll.menu-scroll-left');
        const probashItems = document.querySelector('.probash-country-items');
        const scrollWidth = probashItems.scrollWidth - probashItems.clientWidth;
        let countryItems = document.querySelectorAll('.country-item');
        let ctItems = document.querySelectorAll('.ct-items');

        probashButtonRight.onclick = function () {
            probashItems.scrollLeft += 100;

            if (probashItems.scrollLeft == scrollWidth) {
                probashButtonRight.classList.remove('active');
                probashButtonRight.classList.add('inactive');
            }

            if (probashItems.scrollLeft == 100) {
                probashButtonLeft.classList.remove('inactive');
                probashButtonLeft.classList.add('active');
            }
        };
        probashButtonLeft.onclick = function () {
            probashItems.scrollLeft -= 100;

            if (probashItems.scrollLeft == 0) {
                probashButtonLeft.classList.remove('active');
                probashButtonLeft.classList.add('inactive');
            }

            if (probashItems.scrollLeft == scrollWidth - 100) {
                probashButtonRight.classList.remove('inactive');
                probashButtonRight.classList.add('active');
            }
        };
        ctItems.forEach(item => {
            item.addEventListener('click', () => {
                ctItems.forEach(item => {
                    item.classList.remove('active');
                });
                item.classList.add('active');
                let data = item.getAttribute('data-href');

                document.querySelectorAll('.country-item').forEach(item => {
                    item.style.display = "none";
                });

                let country = document.querySelector('.' + data);
                country.style.display = 'flex';

                if (country.children.length === 0) {
                    requestCountryContent(data);
                }

            });
        });

        let entertainmentItems = document.querySelectorAll('.entertainment-item');
        let etItems = document.querySelectorAll('.et-items');
        etItems.forEach(item => {
            item.addEventListener('click', () => {
                etItems.forEach(item => {
                    item.classList.remove('active');
                });
                item.classList.add('active');
                let data = item.getAttribute('data-href');

                document.querySelectorAll('.entertainment-item').forEach(item => {
                    item.style.display = "none";
                });

                let entertainment = document.querySelector('.' + data);
                entertainment.style.display = 'flex';

                if (entertainment.children.length === 0) {
                    requestEntertainmentContent(data);
                }

            });
        });

        async function requestEconomyContent(value) {
            let url = '/more/home/economy';
            let request = await fetch(url + '?slug=' + value);
            document.querySelector('.' + value).innerHTML = await request.text();

            let images = document.querySelectorAll('.economy-item.' + value + ' .img-loader');
            intersect(images);
        }

        async function requestSportsContent(value) {
            let url = '/more/home/sports';
            let request = await fetch(url + '?slug=' + value);
            document.querySelector('.' + value).innerHTML = await request.text();

            let images = document.querySelectorAll('.sports-item.' + value + ' .img-loader');
            intersect(images);
        }

        async function requestEntertainmentContent(value) {
            let url = '/more/home/entertainment';
            let request = await fetch(url + '?slug=' + value);
            document.querySelector('.' + value).innerHTML = await request.text();

            let images = document.querySelectorAll('.entertainment-item.' + value + ' .img-loader');
            intersect(images);
        }

        async function requestCountryContent(value) {
            let url = '/more/home/countries';
            let request = await fetch(url + '?slug=' + value);
            document.querySelector('.' + value).innerHTML = await request.text();

            let images = document.querySelectorAll('.country-item.' + value + ' .img-loader');
            intersect(images);
        }
    </script>
<div id='div-gpt-ad-1624691711930-0'>
<script>
            googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1624691711930-0');
            });
        </script>
</div>
<style>
    .footer-ad {
        display: block;
        height: auto;
        visibility: visible;
        opacity: 1;
        will-change: opacity;
        width: 100%;
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        box-sizing: border-box;
        z-index: 999999;
        box-shadow: rgb(0 0 0 / 40%) 0px -4px 6px -3px;
        background: #fff;
    }

    .ad-box {
        display: flex;
        justify-content: center;
        margin-top: 4px;
    }

    .ad-close-btn {
        display: block !important;
        background-image: url("data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAAl0lEQVRYw+2WSw6AIAwFX+IZuSIJZ2RRF67EX0FmoemsYV4AbSsFQfBfFmUl9+qkrKVPX2SqzoikKlPpicgymTNi05tMWR1Hrs4I/8qhjcN63+ZX+mfBa/29ZIr+WjRNfy6bqj8Kp+vbCEC/j0D0bQSgxwPgK4IfGf5M4R8NLhVwsYPLNdxw4JaJN318bMEHL3x0DILgW6zbiArszHKr4QAAAABJRU5ErkJggg==");
        background-size: 20px;
        background-position: center;
        background-color: #fff;
        background-repeat: no-repeat;
        border: none;
        height: 28px;
        width: 28px;
        padding: 0;
        margin: 0;
        position: absolute;
        right: 0;
        top: -27px;
        box-shadow: 0 -1px 1px 0 rgb(0 0 0 / 20%);
        border-radius: 12px 0 0 0;
    }

    .ad-close-btn::before {
        position: absolute;
        content: "";
        top: -20px;
        right: 0;
        left: -20px;
        bottom: 0;
    }
</style>
<div class="footer-ad d-print-none">
<div class="ad-box">
<div id='div-gpt-ad-1627731590993-0' style='min-width: 970px; min-height: 90px;'>
<script>
                googletag.cmd.push(function () {
                    googletag.display('div-gpt-ad-1627731590993-0');
                });
            </script>
</div>
</div>
<div class="ad-close-btn" onclick="hideFooterAd()"></div>
<script>
        function hideFooterAd() {
            document.querySelector('.footer-ad').style.display = "none";
            document.querySelector('footer').style.paddingBottom = "10px";
        }
    </script>
</div>
<script>
    const navigatorExtra = document.querySelector('.navigator-extra');
    const slideUpBtn = document.querySelector('[data-target="slide-up"]');
    const slideContent = document.querySelector('[data-target="slide-content"]');
    slideUpBtn.addEventListener("click", slideUp);

    function slideDown(e) {
        e.preventDefault();
        slideContent.classList.add("d-flex");
        slideContent.classList.remove("d-none");
        slideContent.style.position = 'sticky';
        navigatorExtra.children[0].style.display = "none";
    }

    function slideUp(e) {
        e.preventDefault();
        slideContent.classList.add("d-none");
        slideContent.classList.remove("d-flex");
        slideContent.style.position = 'unset';
        navigatorExtra.children[0].style.display = "flex";
    }
</script>
<script>
    (function () {
        "use strict";
        window.addEventListener(
            "load",
            function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName("needs-validation");
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                });
            },
            false
        );
    })();
</script>
<script>
        const slideDownBtn = document.querySelector('[data-target="slide-down"]');
        slideDownBtn.addEventListener("click", slideDown);
    </script>
<script>
        let selector = document.querySelector('.dis-sea');
        let division = document.getElementById("division");
        let district = document.getElementById("district");

        selector.setAttribute('disabled', '');
        let upazila = document.getElementById("upazila");

        division.addEventListener('change', (event) => {
            if (event.target.value !== "" && event.target.value !== null) {
                districtCall(event.target.value);
                upazila.innerHTML = "";
                firstChildUpazila();
            } else {
                selector.setAttribute('disabled', '');
                district.innerHTML = "";
                firstChildDistrict();
                upazila.innerHTML = "";
                firstChildUpazila();
            }
        });

        district.addEventListener('change', (event) => {
            if (event.target.value !== "" && event.target.value !== null) {
                selector.removeAttribute('disabled');
                upazilaCall(event.target.value);
                upazila.innerHTML = "";
                firstChildUpazila();
            } else {
                selector.setAttribute('disabled', '');
                upazila.innerHTML = "";
                firstChildUpazila();
            }
        });

        async function districtCall(value) {
            let url = '<?= $siteoptions['web_url'] ?>/districts';
            let request = await fetch(url + '/' + value);
            district.innerHTML = await request.text();
            firstChildDistrict();
        }

        async function upazilaCall(value) {
            let url = '<?= $siteoptions['web_url'] ?>/upazilas';
            let request = await fetch(url + '/' + value);
            upazila.innerHTML = await request.text();
            firstChildUpazila();
        }

        function firstChildUpazila() {
            let option = document.createElement('option');
            option.value = "";
            option.selected = true;
            option.textContent = "উপজেলা";
            upazila.insertBefore(option, upazila.firstChild);
        }

        function firstChildDistrict() {
            let option = document.createElement('option');
            option.value = "";
            option.selected = true;
            option.textContent = "জেলা";
            district.insertBefore(option, district.firstChild);
        }

        selector.addEventListener(
            "click",
            function (event) {
                let url = window.location.origin;
                if (division.selectedOptions[0].getAttribute("data-value") !== null && district.selectedOptions[0].getAttribute("data-value") !== null) {
                    url = "/country/" + district.selectedOptions[0].getAttribute("data-value");

                    if (upazila.selectedOptions[0].getAttribute("data-value") !== null) {
                        url += "/" + upazila.selectedOptions[0].getAttribute("data-value");
                    }
                    window.location.href = url + '-news';
                }
            },
            false
        );
    </script>
<script>(function(){var js = "window['__CF$cv$params']={r:'72fba5adfccdf444',m:'Es51e7YF7qiNjNherTxIiD4LtRks9ughyCfFFBbsqjU-1658655133-0-AayCZGAyYJW2GL8NyL7LF9e86950zaummukL6j7mNOh68c3pdlUsM86ZkrkLhtEHHNepuUx6MbKL3z/A7TSF9lpApUe0NkIJYrQrEfgR1JfeNUVgYpu1FcnWCu5o28ti+Q==',s:[0xb10ee0a1a3,0xf7d1dce386],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72fba5adfccdf444","token":"f1eeba4b80594b39ae5e5e624e12d357","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
