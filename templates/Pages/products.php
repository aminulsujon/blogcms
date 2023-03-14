
<div class="u-sep mt-4">
    <span class="u-sep-l"></span>
    <h2 class="page-heading color-theme">Latest Products</h2>
    <span class="u-sep-r"></span>
</div>

<div class="row" id="product_list_latest">
<?php 
if(!empty($products_latest)){
	//$products_latest = json_decode($products_latest,true);
	$i=1;
	foreach ($products_latest as $product) {
		?>
		<div class="col-md-3 mb-4" id="product_listed_<?= $i?>">
	        <div class="card">
	        	<a href="<?= $head_url ?>pages/view/<?= $product['id'] ?>/<?= $product['slug'] ?>" class="text-dark">
		        	<div class="imageBox">
					  <div class="imageInn">
					  	<?php 
					  	if(!empty($product['uploads'][0]['id'])){
					  		?>
					  		<img class="card-img-top" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-medium-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="Card image cap">
					  		<?php
					  	}
					  	?>
					    
					  </div>
					  <div class="hoverImg">
					  	<?php 
					  	if(!empty($product['uploads'][1]['id'])){
					  		?>
					  		<img class="card-img-top" src="<?= $head_url ?>img/products/<?= h($product['uploads'][1]['imgname']) ?>-medium-<?= h($product['uploads'][1]['id']) ?>.jpg" alt="Card image cap">
					  		<?php
					  	}
					  	?>
					    
					  </div>
					</div>
	            </a>
	            <div class="card-body">
	                <h3 class="h5"><a href="<?= $head_url ?>pages/view/<?= $product['id'] ?>/<?= $product['slug'] ?>" class="color-theme2"><?= $product['title'] ?></a></h3>
	            </div>
                <a href="<?= $head_url ?>pages/cart/add/<?= $product['id']?>" class="d-block p-2 text-center color-theme">&#x9f3; <?= $product['price'] ?> &nbsp;&nbsp; Add to Cart</a>
	        </div>
	    </div><!--.col-->
		<?php
		$i++;
	}
}
?>


    
    
</div><!--.row-->
<div class="paginator mt-4">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    
