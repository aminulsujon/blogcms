<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voteoption $voteoption
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Voteoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voteoptions form content">
            <?= $this->Form->create($voteoption) ?>
            <fieldset>
                <legend><?= __('Add Voteoption') ?></legend>
                <?php
                    echo $this->Form->control('vote_id', ['options' => $votes]);
                    echo $this->Form->control('voption');
                    echo $this->Form->control('vcount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
