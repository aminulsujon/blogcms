<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote[]|\Cake\Collection\CollectionInterface $votes
 */
?>
<style>.actions{width:233px}</style>
<div class="content">
          <!-- Dynamic Table Full -->
          <div class="block">
            
            <!-- <?= $this->Html->link(__('Top News'), ['action' => 'top'], ['class' => 'button float-right']) ?> -->
            <div class="block-header block-header-default" style="background:#fff">
                <h6>Poll List</h6>
                <div>
                    <?= $this->Html->link(__('<i class="fa fa-plus mr-5"></i> New poll'), ['action' => 'add'], ['class' => 'btn btn-alt-success mr-5 mb-5','escape'=>false]) ?>
                </div>
            </div>
            <div class="block-content block-content-full">
    <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($votes as $vote): ?>
                <tr>
                    <td><?= $this->Number->format($vote->id) ?></td>
                    <td><?= h($vote->title) ?>
                    <br>
                    <?php
                    $total = 0;
                    foreach($vote['voteoptions'] as $vo){
                        echo $vo['voption'].' - ';
                        echo $vo['vcount'].' / ';
                        $total = $total + $vo['vcount'];
                    }
                    echo "&nbsp; &nbsp; Total: ".$total;
                    ?>
                    
                </td>
                    <td><?= $arr_status[$vote->status] ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vote->id],['class'=>'btn btn-outline-primary mr-5 mb-5']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vote->id], ['class'=>'btn btn-outline-danger mr-5 mb-5','confirm' => __('Are you sure you want to delete # {0}?', $vote->id)]) ?>
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
</div>
