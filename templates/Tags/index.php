<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="tags index content">
    <h2 class="content-heading">Category</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => '']) ?>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('title') ?></th>
                        <th>Share Image</th>
                        <th><?= $this->Paginator->sort('seq') ?></th>
                        <th><?= $this->Paginator->sort('isspecial') ?></th>
                        <th><?= $this->Paginator->sort('layout') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tags as $tag): 
                        if($tag->status==1){
                            $color_active = "success";
                        }elseif($tag->status==2){
                            $color_active = "danger";
                        }
                        ?>
                    <tr>
                        <td><?= $this->Number->format($tag->id) ?></td>
                        <td>
                            <?= $tag->has('parent_tag') ? $this->Html->link($tag->parent_tag->title, ['controller' => 'Tags', 'action' => 'view', $tag->parent_tag->id],['style'=>'color:#b40000;font-size:71%;display:block']) : '' ?>
                            <?= h($tag->title) ?></td>
                        <td>
                            <img src="<?= $siteoptions['web_url']?>/img/tags/product-category-thumb-<?= $tag->id?>.jpg">
                        </td>
                        <td><?= $this->Number->format($tag->seq) ?></td>
                        <td><?= $this->Number->format($tag->isspecial) ?></td>
                        <td><?= $this->Number->format($tag->layout) ?></td>
                        <td><span class="btn btn-alt-<?= $color_active?>"><?= $arr_status[$this->Number->format($tag->status)] ?></span></td>
                        <td class="actions">
                            <!-- <?= $this->Html->link(__('<i class="material-icons">remove_red_eye</i>'), ['action' => 'view', $tag->id],['escape'=>false]) ?> -->
                            <?= $this->Html->link(__('<i class="fa fa-pencil fa-2x"></i>'), ['action' => 'edit', $tag->id],['escape'=>false]) ?>
                            <?php // $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['action' => 'delete', $tag->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
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
</div>
