<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload[]|\Cake\Collection\CollectionInterface $uploads
 */
$parameters = $this->request->getAttribute('params');
if(!empty($parameters['pass'][0]) && is_numeric($parameters['pass'][0])){
    $product_id = $parameters['pass'][0];
}else{
    $product_id = "";
}
?>
<style>
.topform input{margin-bottom:20px}
.topform{border: 1px solid #ddd;padding: 20px;}
</style>
<div class="uploads index content">
    <?= $arr_status[$this->Number->format($product->status)].'&nbsp;&nbsp;'.$this->Html->link('Change Status',['controller'=>'products','action'=>'changestatus',$product->id],['title'=>'change status']) ?>
    <button class="button float-right" onclick="window.history.back();">Go Back</button>
    <a class="btn btn-alt-info" href="<?= $siteoptions['web_url'] ?>/upvideos/index/<?= $product->id?>" style="margin-right:10px">Add video</a>
    <a class="btn btn-alt-info" href="<?= $siteoptions['web_url'] ?>/products" style="margin-right:10px">News list</a>
    <a class="btn btn-alt-info" href="<?= $siteoptions['web_url'] ?>/products/add" style="margin-right:10px">New news</a>
    
    <h4 style="border-top:1px solid #ddd;padding-top:10px;margin-top:10px"><?= __('Title: '.$product->title) ?></h4>



    <div class="topform">
        <?= $this->Form->create($upload,['type'=>'file','url'=>['action'=>'add']]) ?>
            <input type="hidden" name="product_id" value="<?= $product->id?>">
            <input type="hidden" name="imgname" value="<?= $product->id?>">
            Image caption
            <input required="required" type="text" name="caption" class="w-100">
            <br>
            Select image to upload:
            <input required="required" type="file" name="fileToUpload" id="fileToUpload">
            <br>
            Status
            <input type="radio" name="status" value="1">Active &nbsp;&nbsp;
            <input type="radio" name="status" value="2">Inactive
            <br>
            <input type="submit" value="Upload Image" name="submit">
        
        <?= $this->Form->end() ?>
    </div>
    <br>
    <div class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('imgname') ?></th>
                    <th><?= $this->Paginator->sort('caption') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($uploads as $upload): ?>
                <tr>
                    <td><?= $this->Number->format($upload->id) ?></td>
                    <td><a 
                        title="view large image" target="_blank"
                        href="<?= $siteoptions['web_url'] ?>/img/products/<?= h($upload->imgname) ?>-large-<?= h($upload->id) ?>.jpg">
                        <img 
                        src="<?= $siteoptions['web_url'] ?>/img/products/<?= h($upload->imgname) ?>-small-<?= h($upload->id) ?>.jpg" 
                        alt="<?= $upload->imgname?>">
                    </a></td>
                    <td><?= h($upload->caption) ?></td>
                    <td><?= $arr_status[$this->Number->format($upload->status)] ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="material-icons">edit</i>'), ['action' => 'edit', $upload->id],['escape'=>false]) ?>
                        <?php // $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['action' => 'delete', $upload->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $upload->id)]) ?>
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
