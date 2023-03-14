<?php
$passedArgs = $this->request->getParam('pass');
if(!empty($passedArgs[0])){
	$pageHeading = $arr_content_type[$passedArgs[0]];
	$passedArgs0 = $passedArgs[0];
}else{
	$pageHeading = "Contents";
	$passedArgs0 = "";
}
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content[]|\Cake\Collection\CollectionInterface $contents
 */
?>
<div class="contents index content">
    <?= $this->Html->link(__('New '.$pageHeading), ['action' => 'add',$passedArgs0], ['class' => 'button float-right']) ?>
    <h3 class="float-left"><?= $pageHeading ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
    <?php 
    foreach ($arr_content_type as $key => $value){
    	echo $this->Html->link($value,['action'=>'index',$key],['class'=>'float-left button button-outline']);
    }
    ?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th>Image</th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contents as $content): ?>
                <tr>
                    <td><?= $this->Number->format($content->id) ?></td>
                    <td><?= $this->Html->image('contents/'.$content->imgname.'-thumb-'.$content->id.'.jpg') ?></td>
                    <td><?= h($content->title) ?></td>
                    <td><?= $arr_status[$content->status] ?></td>
                    <td><?= h($content->created) ?></td>
                    <td><?= h($content->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $content->id]) ?>
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
