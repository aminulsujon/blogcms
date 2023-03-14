<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsTag $productsTag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Products Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsTags form content">
            <?= $this->Form->create($productsTag) ?>
            <fieldset>
                <legend><?= __('Add Products Tag') ?></legend>
                <?php
                    echo $this->Form->control('isrun');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
