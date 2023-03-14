<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
//pr($comment);
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comments view content">
            <h3><?= h($comment->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $comment->has('client') ? $this->Html->link($comment->client->id, ['controller' => 'Clients', 'action' => 'view', $comment->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $comment->has('product') ? $this->Html->link($comment->product->title, ['controller' => 'Products', 'action' => 'view', $comment->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Comment') ?></th>
                    <td><?= $comment->has('parent_comment') ? $this->Html->link($comment->parent_comment->name, ['controller' => 'Comments', 'action' => 'view', $comment->parent_comment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($comment->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($comment->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($comment->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($comment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($comment->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($comment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($comment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comment->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Comments') ?></h4>
                <?php if (!empty($comment->child_comments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($comment->child_comments as $childComments) : ?>
                        <tr>
                            <td><?= h($childComments->id) ?></td>
                            <td><?= h($childComments->client_id) ?></td>
                            <td><?= h($childComments->product_id) ?></td>
                            <td><?= h($childComments->parent_id) ?></td>
                            <td><?= h($childComments->name) ?></td>
                            <td><?= h($childComments->email) ?></td>
                            <td><?= h($childComments->phone) ?></td>
                            <td><?= h($childComments->body) ?></td>
                            <td><?= h($childComments->status) ?></td>
                            <td><?= h($childComments->created) ?></td>
                            <td><?= h($childComments->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $childComments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $childComments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $childComments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childComments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
