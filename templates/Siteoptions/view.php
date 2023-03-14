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
            <?= $this->Html->link(__('Edit Siteoption'), ['action' => 'edit', $siteoption->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Siteoption'), ['action' => 'delete', $siteoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $siteoption->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Siteoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Siteoption'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="siteoptions view content">
            <h3><?= h($siteoption->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Okey') ?></th>
                    <td><?= h($siteoption->okey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ovalue') ?></th>
                    <td><?= h($siteoption->ovalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($siteoption->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($siteoption->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($siteoption->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
