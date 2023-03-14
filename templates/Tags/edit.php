<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
echo $this->Html->script('ckeditor/ckeditor');
?>
<div class="content">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            
            <?= $this->Html->link(__('List Category'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column-responsive column-80">
        <div class="tags form">
            <?= $this->Form->create($tag,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Edit Category') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentTags, 'empty' =>'Select']);
                    echo $this->Form->control('tagtype', ['options' => $arr_tagtype]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('details',['id'=>'texteditor']);
                    echo $this->Form->control('content_id',['options' => $contents,'empty'=>'Select']);
                    echo $this->Form->control('pagelink');
                    ?>
                    <img src="<?= $siteoptions['web_url']?>/img/tags/product-category-thumb-<?= $tag->id?>.jpg">
                    
                    <input type="file" name="fileToUpload" id="fileToUpload"><?php
                    // echo $this->Form->control('seq');
                    // echo $this->Form->control('isspecial');
                    // echo $this->Form->control('layout');
                    echo $this->Form->control('status', ['options' => $arr_status,'type'=>'radio']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace( 'texteditor' );
</script>
