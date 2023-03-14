
<style>
    .pbottom--20{padding-bottom:20px}
</style>
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row" style="transform: none;">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7">
                <div>
                <div class="page--title ptop--30 pbottom--20">
					<h1 class="h2"><span>পুরনো ফলাফল</span></h1>
				</div>
                    <!-- Post Items Start -->
                    <div class="post--items post--items-5">
                        <div class="old_poll_result mt-5">
                        <?php
                        if(!isset($_COOKIE['poll'])) {
                           
                        } else {
                            ?>
                            <p class="thanks">
                                <strong style="color: #363"> আপনার মতামতের জন্য ধন্যবাদ। </strong>
                        </p>
                            <?php
                        }
                        ?>
                        
<?php 
$en = array(1,2,3,4,5,6,7,8,9,0);
$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');

if(!empty($latest_polls)){
    $latest_polls = json_decode($latest_polls,true);
    foreach($latest_polls as $poll):
        $total_vote = 0;
        foreach($poll['voteoptions'] as $po){
            $total_vote = $total_vote + $po['vcount'];
        }
        ?>
        <div class="poll_cont_box">
            <p><span><?= $poll['title']?></span></p>
            <p>ফলাফল: মোট ভোট - <?= str_replace($en, $bn, $total_vote) ?></p>
            <div class="progress">
            <?php 
            $arr_progress_color = ['success','danger','warning'];
            $i=0;
            foreach($poll['voteoptions'] as $po){
                $aria_volume = $po['vcount']/$total_vote*100;
                $aria_show = explode('.',$aria_volume);
                ${'vote_string_' . $i} = $po['voption'].' - '.str_replace($en, $bn, $po['vcount']);
                ?>
                <div
                    class="progress-bar progress-bar-<?= $arr_progress_color[$i] ?> progress-bar-striped" 
                    role="progressbar" 
                    aria-valuenow="<?= $aria_volume?>" 
                    aria-valuemin="0" 
                    aria-valuemax="99" 
                    style="width:<?= $aria_volume?>%"><?= str_replace($en, $bn, $aria_show[0]) ?>% </div>
                <?php
                $i++;
            }
            ?>
            </div>
            <div class="clearfix"></div>
            <div class="progressbar_bot" align="center">
                <ul><li><span class="box0"></span><?= $vote_string_0?></li>
                    <li><span class="box1"></span><?= $vote_string_1?></li>
                    <li><span class="box2"></span><?= $vote_string_2?></li>
                </ul>
            </div>
        </div>
        <?php
    endforeach;
}
?>
                        </div>
                    </div>
                    
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 2991px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <!-- Widget Start -->
                    <div class="widget"><?= $this->element('usn/latest') ?></div>
                    <!-- Widget End -->
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 3370px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
            </div>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>

<style>
    /* Online Poll for show page Start */

.headlines{
    padding-bottom: 45px;
    border-bottom: 1px solid #ddd;
}

.breakings {
    padding-bottom: 0 !important
}

.just_now {
    padding-bottom: 0 !important
}

.old_poll_result {
    border-top: 2px solid #ec1f28;
    padding: 15px 10px 10px 10px;
    margin-bottom: 30px;
}

.poll_title {
    text-align: center;
    margin-top: -15px;
    margin-bottom: 15px;
}

.poll_title h3 {
    background: #ff6d00;
    border-radius: 5px;
    margin: 0 auto;
    color: #fff;
    padding: 5px 15px;
    font-size: 18px;
    display: inline-block
}

.poll_cont_box {
    border-bottom: 2px solid #ec1f28;
    margin-bottom: 25px;
    padding-bottom: 15px;
}

.poll_cont_box:last-child {
    border-bottom: none;
    margin-bottom: 0px;
    padding-bottom: 0px;
}

.poll_cont_box p {
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    font-weight: bold;
    margin: 0;
}

.poll_cont_box p span {
    font-weight: bold;
    display: block;
}

p.total-vote {
    text-align: right;
    line-height: 40px;
    padding-bottom: 0px;
    font-weight: bold;
}

p.thanks {
    text-align: center;
    display: block;
    margin-bottom: 10px
}

.poll_options {
    width: 100%;
    line-height: 35px;
    margin-top: 15px;
    text-align: center;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}

.poll_green {
    background: #01a601;
}

.poll_marron {
    background: #9e0b0f;
}

.poll_navy {
    background: #002157;
}
[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 36px;
    cursor: pointer;
    line-height: 28px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 28px;
    height: 28px;
    border: 3px solid #ff6d00;
    border-radius: 100%;
    background:#fff;
}
.poll_cont_box .opt:nth-child(1) [type="radio"]:checked + label:before,
.poll_cont_box .opt:nth-child(1) [type="radio"]:not(:checked) + label:before {
    border: 3px solid #00a651;
}
.poll_cont_box .opt:nth-child(2) [type="radio"]:checked + label:before,
.poll_cont_box .opt:nth-child(2) [type="radio"]:not(:checked) + label:before {
    border: 3px solid #ff3b30;
}
.poll_cont_box .opt:nth-child(3) [type="radio"]:checked + label:before,
.poll_cont_box .opt:nth-child(3) [type="radio"]:not(:checked) + label:before {
    border: 3px solid #007aff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 16px;
    height: 16px;
    _background: chocolate;
    position: absolute;
    top: 6px;
    left: 6px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
.poll_cont_box .opt:nth-child(1) [type="radio"]:checked + label:after,
.poll_cont_box .opt:nth-child(1) [type="radio"]:not(:checked) + label:after {
    background: #00a651;
}
.poll_cont_box .opt:nth-child(2) [type="radio"]:checked + label:after,
.poll_cont_box .opt:nth-child(2) [type="radio"]:not(:checked) + label:after {
    background: #ff3b30;
}
.poll_cont_box .opt:nth-child(3) [type="radio"]:checked + label:after,
.poll_cont_box .opt:nth-child(3) [type="radio"]:not(:checked) + label:after {
    background: #007aff;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.poll_cont_box .progress{ height:30px; margin-top:15px; margin-bottom:15px;}
.poll_cont_box .progress .progress-bar{ line-height:30px; font-size:14px;}
.progressbar_bot{ margin:0px auto 0; text-align:center;}
.progressbar_bot ul li{ list-style:none; display:inline-block; margin-right:15px; font-size:14px; font-weight:bold;}
.progressbar_bot ul li:last-child{ margin-right:0px;}
.progressbar_bot ul li span{width: 10px;height: 10px;display: inline-block;margin-right: 10px;}
.progressbar_bot ul li span.box0{ background:#00a651;}
.progressbar_bot ul li span.box1{ background:#ff3b30;}
.progressbar_bot ul li span.box2{ background:#007aff;}

.poll_cont_box .progress-bar-success {background-color: #00a651;}
.poll_cont_box .progress-bar-danger {background-color: #ff3b30;}
.poll_cont_box .progress-bar-warning {background-color: #007aff;}

.poll_bot .btn-success{ background: #00a651;}

.poll_bot .smp-regular-but span.smp-but[data-network="sms"]{ display:none;}

.poll_bot .smp-regular-but span.smp-but[data-network="viber"]{ display:none;}

.poll_bot .smp-regular-but span.smp-more{ display:none;}

.poll_bot .smp-regular-but span.smp-but[data-network="whatsapp"]{ display:none;}

/*-----------------------Online Poll for show page End-----------------------------*/
</style>
