<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment[]|\Cake\Collection\CollectionInterface $comments
 */
?>
<style type="text/css">
    .idshow_3,.idshow_2,.idshow_1{opacity:.5;}
    .idshow_3{background: yellow}
    .idshow_2{background: red;color:white;}
    .idshow_1{background: green;color:white;}
</style>
<div class="comments index content">
    
    <h3><?= __('Comments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th></th>
                    
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comments as $comment): ?>
                <tr>
                    <td style="text-align:center" class="idshow_<?= $comment->status?>"><?= $this->Number->format($comment->id) ?>
                       <br><?= $arr_status[$comment->status] ?> 
                    </td>
                    
                    <td>
                        <h4 style="margin:0"><?= h($comment->name) ?></h4>
                        <h6 style="margin:0"><?= h($comment->email) ?>, <?= h($comment->phone) ?></h6>
                        <?= $comment->product->title?>
                        <p style="border-top:1px solid #ddd">
                        <b>Comment:</b> <?= h($comment->body) ?>
                        <br><small style="color:#000">at <?= h($comment->created) ?></small>
                        </p>
                    </td>
                    
                   <?php
                   if($comment->status ==1){
                        $new_status = 2;
                    }elseif($comment->status ==2){
                        $new_status = 1;
                    }elseif($comment->status ==3){
                        $new_status = 1;
                    }
                   ?>
                    <td><?= $this->Html->link('changestatus',['controller'=>'comments','action'=> 'changestatus',$comment->id,$new_status]) ?></td>
                    <td class="actions">
                                               
                        <?php // $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
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
