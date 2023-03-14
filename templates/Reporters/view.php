<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reporter $reporter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reporter'), ['action' => 'edit', $reporter->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reporter'), ['action' => 'delete', $reporter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reporter->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reporters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reporter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reporters view content">
            <h3><?= h($reporter->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($reporter->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Namebn') ?></th>
                    <td><?= h($reporter->namebn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nameen') ?></th>
                    <td><?= h($reporter->nameen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($reporter->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reporter->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($reporter->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($reporter->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($reporter->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($reporter->details)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($reporter->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Genus') ?></th>
                            <th><?= __('Productcode') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Entireview') ?></th>
                            <th><?= __('Details') ?></th>
                            <th><?= __('Topseq') ?></th>
                            <th><?= __('Headingbox') ?></th>
                            <th><?= __('Featurebox') ?></th>
                            <th><?= __('Live') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reporter->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->genus) ?></td>
                            <td><?= h($products->productcode) ?></td>
                            <td><?= h($products->title) ?></td>
                            <td><?= h($products->slug) ?></td>
                            <td><?= h($products->entireview) ?></td>
                            <td><?= h($products->details) ?></td>
                            <td><?= h($products->topseq) ?></td>
                            <td><?= h($products->headingbox) ?></td>
                            <td><?= h($products->featurebox) ?></td>
                            <td><?= h($products->live) ?></td>
                            <td><?= h($products->status) ?></td>
                            <td><?= h($products->created) ?></td>
                            <td><?= h($products->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
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
