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
            <?= $this->Html->link(__('Edit Voteoption'), ['action' => 'edit', $voteoption->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Voteoption'), ['action' => 'delete', $voteoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voteoption->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Voteoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Voteoption'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voteoptions view content">
            <h3><?= h($voteoption->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vote') ?></th>
                    <td><?= $voteoption->has('vote') ? $this->Html->link($voteoption->vote->title, ['controller' => 'Votes', 'action' => 'view', $voteoption->vote->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Voption') ?></th>
                    <td><?= h($voteoption->voption) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voteoption->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vcount') ?></th>
                    <td><?= $this->Number->format($voteoption->vcount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
