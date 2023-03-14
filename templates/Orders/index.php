<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">
    
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstName',['Name']) ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th>Date/Item-Price</th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= h($order->firstName) ?><br>
                    <?= h($order->mobile) ?>-<?= h($order->mobile2) ?>
                    </td>
                    <td><?= h($order->address) ?> ||
                        <?= h($order->address2) ?>
                    </td>
                    <td width="150"><?= h($order->created) ?><br><?= h($order->subproductcount) ?> || &#x9f3; <?= h($order->subtotal) ?>
                    </td>
                    <td><?= $arr_status_order[h($order->status)] ?></td>
                    <td width="150" class="actions">
                        <?= $this->Html->link(__('<i class="material-icons">print</i>'), ['action' => 'printorder', $order->id],['escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="material-icons">remove_red_eye</i>'), ['action' => 'view', $order->id],['escape'=>false]) ?>
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
