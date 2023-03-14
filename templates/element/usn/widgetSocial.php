<div class="widget--title">
    <h2 class="h4">সোশ্যাল মিডিয়া</h2>
</div>

<!-- Social Widget Start -->
<div class="social--widget style--1">
    <ul class="nav">
        <?php
        if(!empty($siteoptions['web_facebook'])){echo '<li class="facebook"><a target="_blank" href="'.$siteoptions['web_facebook'].'"><span class="icon"><i class="fa fa-facebook-f"></i></span></a></li>';}
        if(!empty($siteoptions['web_twitter'])){echo '<li class="twitter"><a target="_blank" href="'.$siteoptions['web_twitter'].'"><span class="icon"><i class="fa fa-twitter"></i></span></a></li>';}
        if(!empty($siteoptions['web_youtube'])){echo '<li class="youtube"><a target="_blank" href="'.$siteoptions['web_youtube'].'"><span class="icon"><i class="fa fa-youtube-square"></i></span></a></li>';}
        if(!empty($siteoptions['web_linkedin'])){echo '<li class="linkedin"><a target="_blank" href="'.$siteoptions['web_linkedin'].'"><span class="icon"><i class="fa fa-linkedin"></i></span></a></li>';}
        if(!empty($siteoptions['web_googlenews'])){echo '<li class="googlenews"><a target="_blank" href="'.$siteoptions['web_googlenews'].'"><span class="icon"><i class="fa fa-google"></i></span></a></li>';}
        if(!empty($siteoptions['web_rssfeed'])){echo '<li class="rss"><a target="_blank" href="'.$siteoptions['web_rssfeed'].'"><span class="icon"><i class="fa fa-rss"></i></span></a></li>';}
        ?>
    </ul>
</div>
<!-- Social Widget End -->