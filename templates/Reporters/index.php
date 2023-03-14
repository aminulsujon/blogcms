<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reporter[]|\Cake\Collection\CollectionInterface $reporters
 */
?>
<div class="content">
    <h2 class="content-heading">Reporter</h2>
    
    <div class="block">
            <div class="block-header block-header-default">
            <?= $this->Html->link(__('New Reporter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </div>
            <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('namebn') ?></th>
                    <th><?= $this->Paginator->sort('nameen') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reporters as $reporter): ?>
                <tr>
                    <td><?= $this->Number->format($reporter->id) ?></td>
                    <td><?= h($reporter->slug) ?></td>
                    <td><?= h($reporter->namebn) ?></td>
                    <td><?= h($reporter->nameen) ?></td>
                    <td><?= h($reporter->location) ?></td>
                    <td><?= $this->Number->format($reporter->status) ?></td>
                    <td><?= h($reporter->created) ?></td>
                    <td><?= h($reporter->modified) ?></td>
                    <td class="actions">
                        <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $reporter->id]) ?> -->
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reporter->id]) ?>
                        <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reporter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reporter->id)]) ?> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
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
</div>
