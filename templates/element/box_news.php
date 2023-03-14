<?php
$product = json_decode($data,true);
?>

<div class="col-md-3 col-sm-4 col-6 mb-4">
	<div class="card">
		<a href="<?= $head_url ?>news/<?= $product['slug'] ?>" class="text-dark">
			<div class="imageBox">
			<div class="imageInn"><?php if(!empty($product['uploads'][0]['id'])){ ?>
				<picture>
					<source media="(min-width: 900px)" srcset="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg">
					<source media="(min-width: 480px)" srcset="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-small-<?= h($product['uploads'][0]['id']) ?>.jpg">
					<img class="card-img-top" alt="<?= $product['uploads'][0]['caption']?>" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="IfItDoesntMatchAnyMedia">
				</picture>
				<?php }?>
			</div>
			<div class="hoverImg d-none"><?php if(!empty($product['uploads'][1]['id'])){?><img class="card-img-top" data-src="<?= $head_url ?>img/products/<?= h($product['uploads'][1]['imgname']) ?>-medium-<?= h($product['uploads'][1]['id']) ?>.jpg" alt="Card image cap"> <?php }?></div>
			</div>
		</a>
		<div class="card-body border-bottom pb-0">
			<a href="<?= $head_url ?>news/<?= $product['slug'] ?>" class="color-theme2"><?= $product['title'] ?></a>
		</div>
		
	</div>
</div>

  