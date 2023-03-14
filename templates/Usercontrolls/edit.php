<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usercontroll $usercontroll
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usercontroll->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usercontroll->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usercontrolls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usercontrolls form content">
            <?= $this->Form->create($usercontroll) ?>
            <fieldset>
                <legend><?= __('Edit Usercontroll') ?></legend>
                <?php
                    echo $this->Form->control('usergroup_id', ['options' => $usergroups]);
                    echo $this->Form->control('controller');
                    echo $this->Form->control('action');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
