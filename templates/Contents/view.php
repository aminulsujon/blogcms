<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Content'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contents view content">
            <h3><?= h($content->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($content->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($content->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imgname') ?></th>
                    <td><?= h($content->imgname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metatitle') ?></th>
                    <td><?= h($content->metatitle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metakey') ?></th>
                    <td><?= h($content->metakey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metades') ?></th>
                    <td><?= h($content->metades) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($content->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contenttype') ?></th>
                    <td><?= $this->Number->format($content->contenttype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seq') ?></th>
                    <td><?= $this->Number->format($content->seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($content->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($content->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $content->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($content->details)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Tags') ?></h4>
                <?php if (!empty($content->tags)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Tagtype') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Content Id') ?></th>
                            <th><?= __('Pagelink') ?></th>
                            <th><?= __('Seq') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($content->tags as $tags) : ?>
                        <tr>
                            <td><?= h($tags->id) ?></td>
                            <td><?= h($tags->parent_id) ?></td>
                            <td><?= h($tags->tagtype) ?></td>
                            <td><?= h($tags->title) ?></td>
                            <td><?= h($tags->slug) ?></td>
                            <td><?= h($tags->content_id) ?></td>
                            <td><?= h($tags->pagelink) ?></td>
                            <td><?= h($tags->seq) ?></td>
                            <td><?= h($tags->created) ?></td>
                            <td><?= h($tags->modified) ?></td>
                            <td><?= h($tags->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
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
