<?php
$session = $this->getRequest()->getSession();
if(!empty($session->read('Cart')) && sizeof($session->read('Cart')) > 0){
  $cart_size = sizeof($session->read('Cart'));
}else{
  $cart_size = "0";
}
?>
<div class="row">
    <div class="col-md-5 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill"><?= $cart_size?></span>
      </h4>
      <ul class="list-group mb-3">
        <?php
        $sub_total = $sub_total_quantity = 0;
        if(!empty($products)){
          $i=0;
          if(!empty($my_cart)){
            foreach ($my_cart as $cart) {
              $cart_quantity[$cart['id']] = $cart['quantity'];
            }
          }
          foreach ($products as $product) {
            //pr($product);die();
            ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <img class="img-fluid rounded shadow-sm float-left mr-2" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="Card image cap">
                <h6 class="my-0"><?= $product->title ?></h6>
                <small class="text-muted"><?= $product->productcode ?></small>
              </div>
              <span class="text-muted"><strong>&#x9f3; <?= $product->price ?> x <?= $cart_quantity[$product->id] ?></strong></span>=
              <span class="text-muted"><strong>&#x9f3; <?= $product->price*$cart_quantity[$product->id] ?></strong></span>
            </li>
            <?php
            $sub_total_quantity = $sub_total_quantity + $cart_quantity[$product->id];
            $sub_total = $sub_total + $product->price*$cart_quantity[$product->id];
            $i++;
          }
        }
        ?>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (BDT) <i><?= $sub_total_quantity?> items</i></span>
          <strong>&#x9f3; <?= $sub_total?></strong>
        </li>
      </ul>

    </div>
    <div class="col-md-7 order-md-1">
      <h4 class="mb-3">Your Address</h4>
      <?= $this->Form->create($order,['url'=>['controller'=>'Orders','action'=>'add']]) ?>
        <?= $this->Form->control('productsDetails',['type'=>'hidden','value'=>json_encode($products)])?>
        <?= $this->Form->control('productsCart',['type'=>'hidden','value'=>json_encode($my_cart)])?>
        <?= $this->Form->control('subtotal',['type'=>'hidden','value'=>$sub_total])?>
        <?= $this->Form->control('subproductcount',['type'=>'hidden','value'=>$sub_total_quantity])?>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="required">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="required">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" value="" required="required">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="mobile2">Additional Mobile</label>
            <input type="text" class="form-control" id="mobile2" name="mobile2">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required="required">
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input value="1" id="paymentMethod" name="paymentMethod" type="radio" class="custom-control-input" checked="chcked">
            <label class="custom-control-label" for="credit">Cash on Delivery</label>
          </div>
        </div>
        
        
        <hr class="mb-4">
        <?= $this->Form->control('Confirm Order',['type'=>'submit','class'=>'add-to-cart btn btn-success','label'=>false]) ?>
        <?= $this->Form->end() ?>
        
      </form>
    </div>
  </div>