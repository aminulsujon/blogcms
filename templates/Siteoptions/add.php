<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Siteoption $siteoption
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Siteoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="siteoptions form content">
            <?= $this->Form->create($siteoption) ?>
            <fieldset>
                <legend><?= __('Add Siteoption') ?></legend>
                <?php
                    echo $this->Form->control('okey',['label'=>'option-slug (unique)']);
                    echo $this->Form->control('ovalue',['label'=>'Value']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
