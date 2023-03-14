<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upvideo $upvideo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Upvideo'), ['action' => 'edit', $upvideo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Upvideo'), ['action' => 'delete', $upvideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $upvideo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Upvideos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Upvideo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="upvideos view content">
            <h3><?= h($upvideo->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $upvideo->has('user') ? $this->Html->link($upvideo->user->id, ['controller' => 'Users', 'action' => 'view', $upvideo->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $upvideo->has('product') ? $this->Html->link($upvideo->product->title, ['controller' => 'Products', 'action' => 'view', $upvideo->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($upvideo->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sourcelink') ?></th>
                    <td><?= h($upvideo->sourcelink) ?></td>
                </tr>
                <tr>
                    <th><?= __('Embedlink') ?></th>
                    <td><?= h($upvideo->embedlink) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($upvideo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($upvideo->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Crated') ?></th>
                    <td><?= h($upvideo->crated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($upvideo->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($upvideo->details)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
