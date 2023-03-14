<style>
.orders table tr th{width:200px}
</style>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
//pr($order);die();
?>
<style type = "text/css">
   <!--
   		.mt-1{margin-top:10px}
		.mb-0{margin-bottom:0}
		.mb-1{margin-bottom:10px}
   		.d-block{display:block}
		.content{box-shadow: 0 0 14px 10px #ddd, 0 3px 6px 0 rgba(0, 0, 0, 0.07);}
		.table{border:1px solid #ddd}
		td{padding:0 5px !important}
      @media print {
		body{color:#555}
        .button, .button-outline,.top-nav-links{display:none}
      }
   -->
</style>
<div class="row">
    
    <div class="column-responsive">
    	<a onclick="window.print();" class="button button-outline d-block">Print this order</a>
        <div class="orders view content">
        	
			<table width="100%" class="mb-1">
				<tr>
					<td width="80">
						<img src="https://www.midbix.com/fish/img/logo.jpg" alt="Purba Agro" title="Purba Agro">
					</td>
					<td>
						<h3 class="mb-0">Order: PO<?= date('mY')?>01<?= h($order->id) ?> </h3>
			            <small>(<?= $arr_payment_method[$order->paymentMethod] ?>)</small>
			            <h5>Cost &#x9f3; <?= $this->Number->format($order->subtotal) ?> &rang; <?= $order->subproductcount ?> items (<?= h($order->created) ?>)</h5>
					</td>
				</tr>
			</table>            
            <ul>
            	<li><?= h($order->firstName) ?></li>
            	<li><?= h($order->mobile) ?> / <?= h($order->mobile2) ?></li>
            	<li><?= h($order->address) ?></li>
            </ul>
            <div class="text">
                <strong><?= __('Order Details') ?></strong>
                <table class="table">
                <?php
                $cart_quantity = array();
                $products_cart = json_decode($order->productsCart,true);
                if(!empty($products_cart)){
                    foreach ($products_cart as $cart) {
                      $cart_quantity[$cart['id']] = $cart['quantity'];
                    }
                  }
                $products = json_decode($order->productsDetails,true);
                //pr($products);die();
                //$sub_total = 0;
                foreach ($products as $product) { //pr($product);die();
                    ?>
                    <tr>
                      <td scope="row" class="border-0">
                        <div class="p-2">
                          
                          <div class="ml-3 d-inline-block align-middle">
                            <img src="<?= $product['cart_image'] ?>">
                          </div>
                        </div>
                      </td>
                      <td>
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?= $product['cart_title'] ?></a>
                              <br>
                              <span>Product Code: <?= $product['cart_code'] ?></span>
                            </h5>
                      </td>
                      <td width="250" class="border-0 align-middle"><span class="strong">&#x9f3; <?= $product['cart_price'] ?></span>
                        &nbsp;x <span class="strong" style="color:red"><?= $product['cart_quantity'] ?></span>
                        &nbsp;
                        = &nbsp;<span class="strong" style="color:green">&#x9f3; <?= $product['cart_total'] ?></span>
                      </td>
                      
                    </tr>
                                        <?php
                                       // $sub_total = $sub_total + $product['price']*$cart_quantity[$product['id']];
                                      }
                ?>
                <tr>
                    
                    <td></td>
                    <td></td>
                    <td><b style="color:red"><?= $order['subproductcount'] ?></b> items<br><b style="color:green">&#x9f3; <?= $order['subtotal'] ?></b></td>

                </tr>
            </table>
            </div>
            
        </div>
        <a onclick="window.print();" class="button button-outline d-block mt-1">Print this order</a>
    </div>
</div>
