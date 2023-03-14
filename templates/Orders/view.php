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
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Print Order'), ['action' => 'printorder', $order->id],['escape'=>false]) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3>ORDER ID: <?= h($order->id) ?> <small><i>Status: <?= $arr_status_order[$order->status]?></i></small></h3>
            <?= $this->Html->link(__('Print Order <i class="material-icons">print</i>'), ['action' => 'printorder', $order->id],['escape'=>false]) ?>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($order->firstName) ?> <?= h($order->lastName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($order->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile2') ?></th>
                    <td><?= h($order->mobile2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($order->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($order->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub total') ?></th>
                    <td>&#x9f3; <?= $this->Number->format($order->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total product') ?></th>
                    <td><?= $order->subproductcount ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($order->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($order->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Method') ?></th>
                    <td><?= $arr_payment_method[$order->paymentMethod] ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $arr_status_order[$order->status]?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Order Details') ?></strong>
                <table>
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
                              <span>Product ID: <?= $product['cart_id'] ?></span>
                              <br>
                              <span>Product Code: <?= $product['cart_code'] ?></span>
                            </h5>
                      </td>
                      <td width="150" class="border-0 align-middle"><strong>&#x9f3; <?= $product['cart_price'] ?></strong>
                        <br>
                        x <span class="strong" style="color:red"><?= $product['cart_quantity'] ?></span>
                        <br>
                        = <span class="strong" style="color:green"><?= $product['cart_total'] ?></span>
                      </td>
                      
                    </tr>
                                        <?php
                                       // $sub_total = $sub_total + $product['price']*$cart_quantity[$product['id']];
                                      }
                ?>
                <tr>
                    
                    <td></td>
                    <td></td>
                    <td><b><?= $order['subproductcount'] ?></b> items<br><b>&#x9f3; <?= $order['subtotal'] ?></b></td>

                </tr>
            </table>
            </div>
            
        </div>
    </div>
</div>
