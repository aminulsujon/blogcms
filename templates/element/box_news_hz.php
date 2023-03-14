<?php
$product = json_decode($data,true);
?>
<div class="shadow-sm p-3 mb-1 bg-white rounded">
<div class="row">
<div class="col-8">
		<div class=""><a href="<?= $head_url ?>news/<?= $product['slug'] ?>" class="color-theme2"><?= $product['title'] ?></a></div>
	</div>
<div class="col-4">	
<a href="<?= $head_url ?>news/<?= $product['slug'] ?>" class="text-dark">
		<div class="imageBox">
		<div class="imageInn"><?php if(!empty($product['uploads'][0]['id'])){ ?>
			<picture>
					<source media="(min-width: 900px)" srcset="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg">
					<source media="(min-width: 480px)" srcset="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg">
					<img class="card-img-top" alt="<?= $product['uploads'][0]['caption']?>" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="IfItDoesntMatchAnyMedia">
				</picture>
		<?php }?></div>
		<div class="hoverImg d-none"><?php if(!empty($product['uploads'][1]['id'])){?><img class="card-img-top" data-src="<?= $head_url ?>img/products/<?= h($product['uploads'][1]['imgname']) ?>-medium-<?= h($product['uploads'][1]['id']) ?>.jpg" alt="Card image cap"> <?php }?></div>
		</div>
	</a>
</div>
	
</div>
</div>

  