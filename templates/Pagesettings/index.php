<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagesetting[]|\Cake\Collection\CollectionInterface $pagesettings
 */
?>
<div class="pagesettings index content">
    <?= $this->Html->link(__('New Pagesetting'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Page settings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pagename') ?></th>
                    <th>Image</th>
                    <th><?= $this->Paginator->sort('metatitle') ?></th>
                    <th><?= $this->Paginator->sort('metakey') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagesettings as $pagesetting): ?>
                <tr>
                    <td><?= $this->Number->format($pagesetting->id) ?></td>
                    <td style="color:red"><?= h($pagesetting->pagename) ?></td>
                    <th><img 
                src="<?= $head_url ?>img/pages/pagesetting-small-<?= $pagesetting->id?>.jpg" 
                alt="share imge"></th>
                    
                    <td><?= h($pagesetting->metatitle) ?></td>
                    <td><?= h($pagesetting->metakey) ?></td>
                    <td class="actions">
                        <?php // $this->Html->link(__('View'), ['action' => 'view', $pagesetting->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagesetting->id]) ?>
                        
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
