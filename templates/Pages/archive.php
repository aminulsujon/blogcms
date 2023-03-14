<style>
	.ar-datae{border-bottom:1px solid #ddd;margin-bottom:20px;padding:15px;display:block;background: #ddd;font-weight: bold;}
</style>
<div class="main--breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?= $siteoptions['web_url']?>" class="btn-link"><i class="fa fm fa-home"></i>প্রচ্ছদ</a></li>
			<li class="active"><span>আর্কাইভ</span></li>
		</ul>
	</div>
</div>
<?php
$en_number = array(1,2,3,4,5,6,7,8,9,0);
$bn_number = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');

// $str_date = str_replace($en, $bn, $str_date);
// $str_year = str_replace($en, $bn, $str_year);

$en_month = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );

$en_month_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );

$bn_month = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );

// $str = str_replace( $en, $bn, $str );

//$str_month = str_replace( $en_short, $bn, $str_month );
?>
<div class="main-content--section pbottom--30">
	<div class="container">
		<div class="row" style="transform: none;">
			<!-- Main Content Start -->
			<div class="main--content col-md-8 col-sm-7">
				<!-- Page Title Start -->
				<div class="page--title ptop--30 pbottom--30">
					<h1 class="h2"><span>আর্কাইভ</span></h1>
				</div>
				<!-- Page Title End -->

				<!-- Post Items Start -->
				<div class="post--items post--items-5">
					<ul class="nav load-more" style="margin-bottom:30px">
					<?php
					if(!empty($archives)){
						$archives = json_decode($archives,true);
						$i=1;
						$set_date = "";
						foreach ($archives as $product) {
							if($set_date == date('d M Y',strtotime($product['created']))){
								$print_date = '';
							}else{
								$date_bn = date('d M Y',strtotime($product['created']));
								$date_bn = str_replace( $en_number, $bn_number, $date_bn );
								$date_bn = str_replace( $en_month_short, $bn_month, $date_bn );
								$print_date = '<span class="ar-datae">'.$date_bn.'</span>';
							}
							?>
							<li>
								<?= $print_date ?>
								<?= $this->element('usn/productLarge',['product'=>$product]) ?>
							</li>
							<?php
							$set_date = date('d M Y',strtotime($product['created']));
						}
					}
					?>
					</ul>
				</div>
				<div class="border-top pt-2 mt-4" style ="
    border-top: 1px solid #ddd;
    padding-top: 20px;
    text-align: center;">
					<a class="p-2 text-decoration-none h6 text-dark" href="<?= $siteoptions['web_url']?>/archives/p/1">প্রথম পাতা</a> &nbsp;&nbsp;&nbsp;
					<?php
					if($product_page == 1){
						?><a class="p-2 text-decoration-none h6 color-theme2" href="<?= $siteoptions['web_url']?>/archives/p/<?= $product_page+1 ?>">পরবর্তী পাতা &#155;</a>&nbsp;&nbsp;&nbsp;<?php
					}else{
						?>
						<a class="p-2 text-decoration-none h6 color-theme2" href="<?= $siteoptions['web_url']?>/archives/p/<?= $product_page-1 ?>">&#139; পূর্ববর্তী পাতা</a>&nbsp;&nbsp;&nbsp;
						<a class="p-2 text-decoration-none h6 color-theme2" href="<?= $siteoptions['web_url']?>/archives/p/<?= $product_page+1 ?>">পরবর্তী পাতা &#155;</a>&nbsp;&nbsp;&nbsp;
						<?php 
					}
					?>
				</div>
				
			</div>
			<!-- Main Sidebar Start -->
			
		</div>
	</div>
</div>

