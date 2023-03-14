<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Siteoption[]|\Cake\Collection\CollectionInterface $siteoptions
 */
?>
<div class="siteoptions index content">
    <?= $this->Html->link(__('Page settings'), ['controller' => 'pagesettings','action' => 'index'], ['class' => 'button float-right','style'=>'margin-left:10px']) ?>
    <?= $this->Html->link(__('New Site option'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Site options') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('okey','Setting Name') ?></th>
                    <th><?= $this->Paginator->sort('ovalue','Current Value') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siteoptions as $siteoption): ?>
                <tr>
                    <td><?= $this->Number->format($siteoption->id) ?></td>
                    <td><?= h($siteoption->okey) ?></td>
                    <td><?= h($siteoption->ovalue) ?></td>
                    <td class="actions">
                        
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $siteoption->id]) ?>
                        
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
