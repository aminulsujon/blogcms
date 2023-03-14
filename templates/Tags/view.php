<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $tag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Category'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags view content">
            <h3><?= h($tag->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Category') ?></th>
                    <td><?= $tag->has('parent_tag') ? $this->Html->link($tag->parent_tag->title, ['controller' => 'Tags', 'action' => 'view', $tag->parent_tag->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($tag->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($tag->slug) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Seq') ?></th>
                    <td><?= $this->Number->format($tag->seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $arr_status[$this->Number->format($tag->status)] ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tag->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tags') ?></h4>
                <?php if (!empty($tag->child_tags)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            
                            <th><?= __('Title') ?></th>
                            <th><?= __('Slug') ?></th>
                            
                            <th><?= __('Seq') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tag->child_tags as $childTags) : ?>
                        <tr>
                            <td><?= h($childTags->id) ?></td>
                            
                            <td><?= h($childTags->title) ?></td>
                            <td><?= h($childTags->slug) ?></td>
                            
                            <td><?= h($childTags->seq) ?></td>
                            <td><?= h($childTags->created) ?></td>
                            <td><?= h($childTags->modified) ?></td>
                            <td><?= h($childTags->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $childTags->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $childTags->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $childTags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childTags->id)]) ?>
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
