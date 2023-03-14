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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $voteoption->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $voteoption->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Voteoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voteoptions form content">
            <?= $this->Form->create($voteoption) ?>
            <fieldset>
                <legend><?= __('Edit Voteoption') ?></legend>
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
