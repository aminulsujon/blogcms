<style>
	.load-more{display:none}
</style>

<?php use Cake\I18n\Time;?>
<?php
if(!empty($products_tagged)){
	$products_tagged = json_decode($products_tagged,true);
	?>
    
	    <h1 class="page-heading mb-4"><a href="<?= $head_url ?>topic/<?= $products_tagged[0]['slug'] ?>" class="color-theme"><?= $products_tagged[0]['title']?></a></h1>
	    
	<div class="row">
		<div class="col-md-12">
			<div class="row">
			<?php
			$i=1;
			foreach ($products_tagged[0]['products'] as $product) {
				?>
				<div class="col-md-6 mb-4">
			        <div class="card">
			        	<a href="<?= $head_url ?>news/<?= $product['id'] ?>" class="text-dark">
				        	<div class="imageBox">
							  <div class="imageInn"><?php if(!empty($product['uploads'][0]['id'])){ ?><img class="card-img-top" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-medium-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="Card image cap"><?php }?></div>
							  <div class="hoverImg"><?php if(!empty($product['uploads'][1]['id'])){?><img class="card-img-top" src="<?= $head_url ?>img/products/<?= h($product['uploads'][1]['imgname']) ?>-medium-<?= h($product['uploads'][1]['id']) ?>.jpg" alt="Card image cap"> <?php }?></div>
							</div>
			            </a>
			            <div class="card-body border-bottom pb-0">
			                <div class=""><a href="<?= $head_url ?>news/<?= $product['id'] ?>" class="color-theme2"><?= $product['title'] ?></a></div>
			            </div>
		                 <?php 
						$now = Time::parse($product['created']);?>
		                <span class="d-none p-2 text-center color-theme"><?= $now->timeAgoInWords([
						    'accuracy' => ['month' => 'month'],
						    'end' => '1 year'
						]);?></span>
			        </div>
			    </div>
				<?php
				$i++;
				if($i==5){break;}
			}
			?>
			</div>
		</div>
		<div class="col-md-12 mt-4">
			<?php
			$i=1;
			foreach ($products_tagged[0]['products'] as $product) {
				if($i>4 && $i<11){
					?><div class="media mb-4 border">
						<?php
						if(!empty($product['uploads'][0]['imgname'])){
							?><a href="<?= $head_url ?>news/<?= $product['id'] ?>"><img src="<?= $head_url ?>img/products/<?= $product['uploads'][0]['imgname'] ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" class="mr-3" alt="<?= $product['uploads'][0]['caption'] ?>">
					    </a><?php
						}
						?>
					    
					    <div class="media-body p-4">
					      <h2 class="mt-0 mb-1 font-weight-normal"><a href="<?= $head_url ?>news/<?= $product['id'] ?>"><?= $product['title'] ?></a></h2>
					    </div>

					  </div><?php
					  $set_date = date('d M Y',strtotime($product['created']));
				}
				$i++;
			}
			?>
			
			<?php
			$i=1;
			$j=1;
			foreach ($products_tagged[0]['products'] as $product) {
				if($i>10){
					if($i==11 || $i==21 || $i==31 || $i==41 || $i==51 || $i==61 || $i==71 || $i==81 || $i==91 ){
						echo '<div class="load-more" id="load'.$j.'">';
						$j++;
					}
					?><div class="media mb-4 border">
						<?php
						if(!empty($product['uploads'][0]['imgname'])){
							?><a href="<?= $head_url ?>news/<?= $product['id'] ?>"><img src="<?= $head_url ?>img/products/<?= $product['uploads'][0]['imgname'] ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg" class="mr-3" alt="<?= $product['uploads'][0]['caption'] ?>">
					    </a><?php
						}
						?>
					    <div class="media-body p-4">
					      <h2 class="mt-0 mb-1 font-weight-normal"><a href="<?= $head_url ?>news/<?= $product['id'] ?>"><?= $product['title'] ?></a></h2>
					    </div>

					  </div><?php
					  $set_date = date('d M Y',strtotime($product['created']));
					if($i==20 || $i==30 || $i==40 || $i==50 || $i==60 || $i==70 || $i==80 || $i==90 || $i==100){
						echo '</div>';
					}
				}
				$i++;
			}
			?>
			</div>
			<a id="btnmore" onclick="showMore(1)" class="btn btn-lg d-block w-50 m-auto btn-info" href="javascript:void(0);">আরও</a>
			
		</div>
	
	</div><!--.row-->
	<?php
}
?>

<script>
	function showMore(page){
		pagenext = parseInt(page)+1;
		var myEle = document.getElementById("load"+page);
		if(myEle){
			document.getElementById("load"+page).setAttribute("style", "display:block");
			document.getElementById("btnmore").setAttribute("onclick", "showMore("+pagenext+")");
		}else{
			window.location.replace("/archive");
		}
	}
</script>