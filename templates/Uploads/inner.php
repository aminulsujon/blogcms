<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload[]|\Cake\Collection\CollectionInterface $uploads
 */

?>
<style>
.colorblue{color:blue}
.topform input{margin-bottom:20px}
.topform{border: 1px solid #ddd;padding: 20px;}
#imageNotice{display: none;
    background: red;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    margin-bottom: 10px;}
</style>
<div class="content">
    <div class="block">
        <div class="block-header block-header-default" style="background:#fff">
            <h6><i class="si si-film"></i> Media Library</h6>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
            <div class="col-12">
            <div class="topform">
                <?= $this->Form->create($upload,['type'=>'file','url'=>['action'=>'inner']]) ?>
                <!-- <div id="imageNotice">
                    Your image size not matched, The image size must be of widht 800px and height 450px;
                </div> -->
                
                Select image to upload
                <input required="required" type="file" name="fileToUpload" id="imageFile">
                <br><b>*Image size 800x450px</b>
                <br><br>
                <input type="hidden" name="status" value="1">
                <input type="submit" value="Upload Image" name="submit" class="btn btn-primary mr-5 mb-5">
            
                <?= $this->Form->end() ?>
            </div>
            </div>
            <div class="col-12">
                
                <div class="row" style="margin-top:20px">
                    <?php foreach ($uploaded as $upload): ?>
                        <div class="col-3">
                            <div style="padding:10px;">
                            
                            <img
                            style="max-width:100%;height:auto"
                        src="<?= $siteoptions['web_url'] ?>/img/products/<?= h($upload->imgname) ?>-medium-<?= h($upload->id) ?>.jpg" 
                        alt="<?= $upload->imgname?>"></div>
                        </div>
                    <?php endforeach; ?>
                
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
</div>

