<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voteoption[]|\Cake\Collection\CollectionInterface $voteoptions
 */
?>
<div class="voteoptions index content">
    <?= $this->Html->link(__('New Voteoption'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Voteoptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vote_id') ?></th>
                    <th><?= $this->Paginator->sort('voption') ?></th>
                    <th><?= $this->Paginator->sort('vcount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($voteoptions as $voteoption): ?>
                <tr>
                    <td><?= $this->Number->format($voteoption->id) ?></td>
                    <td><?= $voteoption->has('vote') ? $this->Html->link($voteoption->vote->title, ['controller' => 'Votes', 'action' => 'view', $voteoption->vote->id]) : '' ?></td>
                    <td><?= h($voteoption->voption) ?></td>
                    <td><?= $this->Number->format($voteoption->vcount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $voteoption->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $voteoption->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $voteoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voteoption->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
