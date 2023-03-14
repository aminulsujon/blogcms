<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsTag[]|\Cake\Collection\CollectionInterface $productsTags
 */
?>
<div class="productsTags index content">
    <?= $this->Html->link(__('New Products Tag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products Tags') ?></h3>
    <div>
    <?php 
    //foreach($tags as $key => $value){
      //  echo $value;
    //}
    ?>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('tag_id') ?></th>
                    <th><?= $this->Paginator->sort('isrun') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productsTags as $productsTag): ?>
                <tr>
                    <td><?= $productsTag->has('product') ? $this->Html->link($productsTag->product->title, ['controller' => 'Products', 'action' => 'view', $productsTag->product->id]) : '' ?></td>
                    <td><?= $productsTag->has('tag') ? $this->Html->link($productsTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $productsTag->tag->id]) : '' ?></td>
                    <td><?= $this->Number->format($productsTag->isrun) ?></td>
                    <td class="actions">
                        <?php // $this->Html->link(__('View'), ['action' => 'view', $productsTag->product_id]) ?>
                        <?php // $this->Html->link(__('Edit'), ['action' => 'edit', $productsTag->product_id]) ?>
                        <?php // $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsTag->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsTag->product_id)]) ?>
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
