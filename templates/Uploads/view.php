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
            <?= $this->Html->link(__('Edit Upload'), ['action' => 'edit', $upload->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Upload'), ['action' => 'delete', $upload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $upload->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Uploads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Upload'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="uploads view content">
            <h3><?= h($upload->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $upload->has('product') ? $this->Html->link($upload->product->title, ['controller' => 'Products', 'action' => 'view', $upload->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Imgname') ?></th>
                    <td><?= h($upload->imgname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caption') ?></th>
                    <td><?= h($upload->caption) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imgurl') ?></th>
                    <td><?= h($upload->imgurl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($upload->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($upload->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($upload->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($upload->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
