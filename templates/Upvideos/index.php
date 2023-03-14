<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upvideo[]|\Cake\Collection\CollectionInterface $upvideos
 */
?>
<div class="content">
          <!-- Dynamic Table Full -->
          <div class="block">
            
            <div class="block-header block-header-default" style="background:#fff">
                <h6>Video List</h6>
                <div>
                    <?= $this->Html->link(__('<i class="fa fa-plus mr-5"></i> New video'), ['action' => 'add'], ['class' => 'btn btn-alt-success mr-5 mb-5','escape'=>false]) ?>
                </div>
            </div>
            <div style="margin: 14px 20px">
            <?= $this->Form->create(null,['url'=>['controller'=>'upvideos','action'=>'index'],'class'=>'']) ?>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search video title" name="txtSearch" required="required" value="<?= $txtSearch ?? ''?>">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            <?= $this->Form->end() ?>
            </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('embedlink') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($upvideos as $upvideo): ?>
                <tr>
                    <td><?= $this->Number->format($upvideo->id) ?></td>
                    <td class="des_cription">
                        <?= h($upvideo->embedlink)?>
                    </td>
                    <td><?= h($upvideo->title) ?></td>
                    
                    <td><?= $arr_status[$upvideo->status] ?></td>
                    <td><?= h($upvideo->created) ?></td>
                    <td class="actions">
                    <?php // $this->Html->link(__('View'), ['action' => 'view', $upvideo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $upvideo->id]) ?>
                        <?php // $this->Form->postLink(__('Delete'), ['action' => 'delete', $upvideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $upvideo->id)]) ?>
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
</div></div>