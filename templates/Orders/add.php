<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
                    echo $this->Form->control('firstName');
                    echo $this->Form->control('lastName');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('mobile2');
                    echo $this->Form->control('email');
                    echo $this->Form->control('address');
                    echo $this->Form->control('address2');
                    echo $this->Form->control('paymentMethod');
                    echo $this->Form->control('productsDetails');
                    echo $this->Form->control('status');
                    echo $this->Form->control('products._ids', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
