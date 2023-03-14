<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload $upload
 */
?>
<style>
.topform input{margin-bottom:20px}
.topform{border: 1px solid #ddd;padding: 20px;}
</style>
<div class="uploads index content">
    <h2 class="content-heading">Edit Photo</h2>
    <aside class="column">
        <div class="side-nav">
            <a 
                title="view large image" target="_blank"
                href="#">
                <img 
                src="<?= $siteoptions['web_url'] ?>/img/products/<?= h($upload->imgname) ?>-small-<?= h($upload->id) ?>.jpg" 
                alt="<?= $upload->imgname?>">
            </a>
            
        </div>
    </aside>
    <br>
    <div class="">
        <div class="">
            <button class="button float-right" onclick="window.history.back();">Go Back</button>
            <div class="topform">
                <?= $this->Form->create($upload,['type'=>'file','url'=>['action'=>'edit',$upload->id]]) ?>
                    Image caption
                    <input required="required" class="w-100" type="text" name="caption" value="<?= $upload->caption?>">
                    <br>
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    Status
                    <?php
                    switch ($upload->status) {
                        case 1:
                            $status = '<input type="radio" checked="checked" name="status" value="1">Active &nbsp;&nbsp;
                                       <input type="radio" name="status" value="2">Inactive';
                            break;
                        case 2:
                            $status = '<input type="radio" name="status" value="1">Active &nbsp;&nbsp;
                                       <input type="radio" checked="checked" name="status" value="2">Inactive';
                            break;
                        default:
                            $status = '<input type="radio" name="status" value="1">Active &nbsp;&nbsp;
                                       <input type="radio" name="status" value="2">Inactive';
                            break;
                    }
                    echo $status;
                    ?>
                    <br>
                    <input type="submit" value="Upload Image" name="submit">
                
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
