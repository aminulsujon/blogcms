<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload $upload
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Uploads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="uploads form content">
            <?= $this->Form->create($upload) ?>
            <fieldset>
                <legend><?= __('Add Upload') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('imgname');
                    echo $this->Form->control('caption');
                    echo $this->Form->control('imgurl');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
