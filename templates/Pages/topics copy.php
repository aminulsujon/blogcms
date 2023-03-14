<?php use Cake\I18n\Time;?>
<?php
//pr($products_tagged);die();
?>
<?php 
if(!empty($products_tagged)){
	$products_tagged = json_decode($products_tagged,true);
	?>
    
	    <h1 class="page-heading mb-4"><a href="<?= $head_url ?>pages/topics/<?= $products_tagged[0]['id'] ?>/<?= $products_tagged[0]['slug'] ?>" class="color-theme"><?= $products_tagged[0]['title']?></a></h1>
	    
	<div class="row">
		<div class="col-md-6">
			<div class="row">
			<?php
			$i=1;
			foreach ($products_tagged[0]['products'] as $product) {
				?>
				<div class="col-md-6 mb-4">
			        <div class="card">
			        	<a href="<?= $head_url ?>pages/view/<?= $product['id'] ?>/<?= $product['slug'] ?>" class="text-dark">
				        	<div class="imageBox">
							  <div class="imageInn"><?php if(!empty($product['uploads'][0]['id'])){ ?><img class="card-img-top" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-medium-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="Card image cap"><?php }?></div>
							  <div class="hoverImg"><?php if(!empty($product['uploads'][1]['id'])){?><img class="card-img-top" src="<?= $head_url ?>img/products/<?= h($product['uploads'][1]['imgname']) ?>-medium-<?= h($product['uploads'][1]['id']) ?>.jpg" alt="Card image cap"> <?php }?></div>
							</div>
			            </a>
			            <div class="card-body border-bottom pb-0">
			                <div class=""><a href="<?= $head_url ?>pages/view/<?= $product['id'] ?>/<?= $product['slug'] ?>" class="color-theme2"><?= $product['title'] ?></a></div>
			            </div>
		                 <?php 
						$now = Time::parse($product['created']);?>
		                <span href="<?= $head_url ?>pages/cart/add/<?= $product['id']?>" class="d-none p-2 text-center color-theme"><?= $now->timeAgoInWords([
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
		<div class="col-md-6">
			<?php
			$i=1;
			foreach ($products_tagged[0]['products'] as $product) {
				if($i>4){
					?><div class="media mb-4">
						<?php
						if(!empty($product['uploads'][0]['imgname'])){
							?><a href="<?= $head_url ?>pages/view/<?= $product['id'] ?>/<?= $product['slug'] ?>"><img src="<?= $head_url ?>img/products/<?= $product['uploads'][0]['imgname'] ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" class="mr-3" alt="<?= $product['uploads'][0]['caption'] ?>">
					    </a><?php
						}
						?>
					    
					    <div class="media-body">
					      <h5 class="mt-0 mb-1"><a href="<?= $head_url ?>pages/view/<?= $product['id'] ?>/<?= $product['slug'] ?>"><?= $product['title'] ?></a></h5>
					      
					    </div>
					  </div><?php
					  $set_date = date('d M Y',strtotime($product['created']));
				}
				$i++;
			}
			?>
		</div>
	
	</div><!--.row-->
	<?php
}
?>