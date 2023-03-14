<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload $upload
 */
$passedArgs = $this->request->getParam('pass');
if(!empty($passedArgs[0])){
    $passedArgs0 = $passedArgs[0];
}else{
    $passedArgs0 = 1;
}
switch ($passedArgs0) {
    case 1:
        $heading = "News";
        break;
    case 2:
        $heading = "Photo Gallery";
        break;
    case 3:
        $heading = "Video Gallery";
        break;
    case 4:
        $heading = "LIVE";
        break;
    default:
        $heading = "News";
        break;
}
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->element('admin_left_items')?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="uploads form content">
            <button class="button float-right" onclick="window.history.back();">Go Back</button>&nbsp;
            
            <?php 
            //pr($siteoption);die();
            if($passedArgs0 == 4){
                if($siteoption['ovalue'] ==1){
                    $btn_txt = "STOP HOME LIVE";
                    $act_val = "2";
                }else{
                    $btn_txt = "START HOME LIVE";
                    $act_val = "1";
                }
                echo $this->Html->link($btn_txt,['action'=>'homelive',2,$act_val],['class'=>'button float-right','style'=>'margin-right:15px']);
                
            }
            ?>
            
            <h2><?= $heading ?> Media Studio</h2>
            <div class="">
                
                    <?= $this->Html->link(__('Create '.$heading.' &neArr;'), ['controller' => 'products','action' => 'add',$passedArgs0], ['class' => 'button button-outline','escape'=>false]) ?>

                    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions" width="200"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): 
                if(empty($product->topseq)){
                    $link_to = "addtop";
                    $action_icon = "add_circle_outline";
                    $color_cls = "darkgray";
                }else{
                    $link_to = "removtop";
                    $action_icon = "remove_circle_outline";
                    $color_cls = "green";
                }
                ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    
                    <td><small class="text-success"><?= h($product->created) ?></small><br><?= h($product->title) ?>
                        
                    </td>
                    <td><?= $this->Html->link($arr_status[$this->Number->format($product->status)],['action'=>'changestatus',$product->id],['title'=>'change status']) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="material-icons">insert_comment</i>'),['controller'=>'Products','action'=>'livecomment',$product->id],['','escape'=>false,'title'=>'Add Highlights']) ?>
                        <?= $this->Html->link(__('<i class="material-icons">add_a_photo</i>'), ['controller' => 'Uploads','action' => 'index', $product->id],['escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="material-icons">play_circle_outline</i>'), ['controller' => 'Upvideos','action' => 'index', $product->id],['escape'=>false]) ?>
                        <?php // $this->Html->link(__('<i class="material-icons">remove_red_eye</i>'), ['action' => 'view', $product->id],['escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="material-icons">edit</i>'), ['action' => 'edit', $product->id],['escape'=>false]) ?>
                        <?php // $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['action' => 'delete', $product->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
</div>
