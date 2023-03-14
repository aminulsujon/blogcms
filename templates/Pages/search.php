<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= $siteoptions['web_url']?>" class="btn-link"><i class="fa fm fa-home"></i>প্রচ্ছদ</a></li>
            <li class="active"><span>সার্চ</span></li>
        </ul>
    </div>
</div>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row" style="transform: none;">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 381.5px;">
                    <!-- Search Widget Start -->
                    <div class="search--widget ptop--30">
<?= $this->Form->create(null,['url'=>['controller'=>'pages','action'=>'search'],'class'=>'']) ?>
<input type="text" name="txtSearch" required="required" placeholder="সার্চ..." class="form-control">
<button class="btn-link" style="position: absolute;
    right: 15px;top:30px;
    background: #ddd;
    padding: 3px 15px;">
<i class="header--search-icon fa fa-search"></i>
</button>
<?= $this->Form->end() ?>
                    </div>
                    <!-- Search Widget End -->

                    <!-- Page Title Start -->
                    <div class="page--title ptop--30 mtop--30">
                        <h2 class="h2">সার্চ ফলাফল: <span><?= $txtSearch ?></span></h2>
                    </div>
                    <!-- Page Title End -->

                    <!-- Post Items Start -->
                    <div class="post--items post--items-5 pd--30-0">
                        <ul class="nav">
                        <?php
                        if(!empty($products)){
                            $products = json_decode($products,true);
						$i=1;
						foreach ($products as $product) {
							?>
							<li>
								<!-- Post Item Start -->
								<?= $this->element('usn/productLarge',['product'=>$product])?>
							</li>
						<?php
						$i++;
                        }
						}
						?>
                        </ul>
                    </div>
                    <!-- Post Items End -->

                    <!-- Pagination Start -->
                    <!-- <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                        <p class="pagination-hint float--left">Page 02 of 03</p>

                        <ul class="pagination float--right">
                            <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li class="active"><span>02</span></li>
                            <li><a href="#">03</a></li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <i class="fa fa-angle-double-right"></i>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li><a href="#">20</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- Pagination End -->
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 2991px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <!-- Widget Start -->
                    
                    <!-- Widget End -->
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 3370px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
            </div>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>
