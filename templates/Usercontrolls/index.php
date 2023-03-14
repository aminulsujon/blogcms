<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usercontroll[]|\Cake\Collection\CollectionInterface $usercontrolls
 */
?>
<div class="usercontrolls index content">
    <?= $this->Html->link(__('New Usercontroll'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usercontrolls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('usergroup_id') ?></th>
                    <th><?= $this->Paginator->sort('controller') ?></th>
                    <th><?= $this->Paginator->sort('action') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usercontrolls as $usercontroll): ?>
                <tr>
                    <td><?= $this->Number->format($usercontroll->id) ?></td>
                    <td><?= $usercontroll->has('usergroup') ? $this->Html->link($usercontroll->usergroup->name, ['controller' => 'Usergroups', 'action' => 'view', $usercontroll->usergroup->id]) : '' ?></td>
                    <td><?= h($usercontroll->controller) ?></td>
                    <td><?= h($usercontroll->action) ?></td>
                    <td><?= $this->Number->format($usercontroll->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usercontroll->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usercontroll->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usercontroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usercontroll->id)]) ?>
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
