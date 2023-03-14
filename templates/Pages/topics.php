<style>
	.load-more{display:none}
	.submenu a{
		padding: 10px;color:#000;margin-left:15px
	}
</style>
<?php
if(!empty($products_tagged)){
	$products_tagged = json_decode($products_tagged,true);
	$cat_details = json_decode($cat_details,true);
	//pr($cat_details);die();
	?>
<div class="main--breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?= $siteoptions['web_url']?>" class="btn-link"><i class="fa fm fa-home"></i>প্রচ্ছদ</a></li>
			<li class="active"><span><?= $products_tagged[0]['title']?></span></li>
		</ul>
	</div>
</div>

<div class="main-content--section pbottom--30">
	<div class="container">
	<?= $this->element('adsense728x90')?>
		<div class="row" style="transform: none;">
			<!-- Main Content Start -->
			<div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<!-- Page Title Start -->
					<div class="page--title ptop--30" style="display:flex">
						<h1 class="h2"><span><?= $products_tagged[0]['title']?></span></h1>
						<div class="submenu">
						<?php
						if(!empty($cat_details['child_tags'])){
							foreach($cat_details['child_tags'] as $tag){
								echo $this->Html->link($tag['title'],['action'=>'category',$tag['slug']]);
							}
						}
						?>
						</div>
					</div>
					<!-- Page Title End -->

					<!-- Post Items Start -->
					<div class="post--items post--items-5 pd--30-0">
						<ul class="nav">
						<?php
						$i=1;
						foreach ($products_tagged[0]['products'] as $product) {
							?>
							<li>
								<!-- Post Item Start -->
								<?= $this->element('usn/productLarge',['product'=>$product])?>
							</li>
						<?php
						$i++;
						if($i>10){break;} 
						}
						?>
						</ul>
						<?php
					$i=10;
					$j=1;
					foreach ($products_tagged[0]['products'] as $product) {
						if($i>10){
							if($i==11 || $i==21 || $i==31 || $i==41 || $i==51 || $i==61 || $i==71 || $i==81 || $i==91 ){
								echo '<ul class="nav load-more mt--4" id="load'.$j.'" style="border-top:1px solid #ddd">';
								$j++;
							}
							?>
							<li>
								<!-- Post Item Start -->
								<?= $this->element('usn/productLarge',['product'=>$product])?>
							</li>
							<?php
							$set_date = date('d M Y',strtotime($product['created']));
							if($i==20 || $i==30 || $i==40 || $i==50 || $i==60 || $i==70 || $i==80 || $i==90 || $i==100){
								echo '</ul>';
							}
						}
						$i++;
					}
					?>
					</ul>
					</div>
                            <!-- Post Items End -->

						
                            <!-- Post Items Start -->
					<a onclick="showMore(1)" id="btnmore" class="btn btn-primary btn-block rounded-0 text-center text-white py-3" href="javascript:void(0);">
					আরও
					</a>
					<!-- Pagination End -->
					<div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 2921px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                            <!-- Widget Start -->
							<?= $this->element('usn/latest') ?><br><br><br>
							<div class="widget">
								<!-- Ad Widget Start -->
								<div class="widget"><?= $this->element('adsdetails1')?></div>
								<!-- Ad Widget End -->
							</div>
                        <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 3370px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
				
            </div>
			
        </div>
<?php }?>
<script>
	function showMore(page){
		pagenext = parseInt(page)+1;
		var myEle = document.getElementById("load"+page);
		if(myEle){
			document.getElementById("load"+page).setAttribute("style", "display:block");
			document.getElementById("btnmore").setAttribute("onclick", "showMore("+pagenext+")");
		}else{
			//window.location.replace("/archive");
			alert('এই বিভাগের আর কোন সংবাদ পাওয়া যায়নি, অনুগ্রহপূর্বক সার্চ করুন');
		}
	}
</script>