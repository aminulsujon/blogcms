<?php 
//pr(json_decode(json_encode($tag),true));die();
if(!empty($products_latest)){
    $products = json_decode($products_latest,true);
    //pr($products);
    ?>

<div class="u-sep mt-4">
    <span class="u-sep-l"></span>
    <h2 class="page-heading color-theme"><?= $products[0]['title'] ?></h2>
    <span class="u-sep-r"></span>
</div>
<div class="row">
<?php 
//pr(json_decode(json_encode($tag),true));die();

    
    foreach ($products[0]['products'] as $product) {
        //pr($product);die();
        ?>
        <div class="col-md-3 mb-4">
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
    }

?>
    
    
</div><!--.row-->
<?php } ?>