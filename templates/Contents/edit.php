<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
$passedArgs = $content['contenttype'];
if(!empty($passedArgs)){
	$pageHeading = $arr_content_type[$passedArgs];
	$passedArgs0 = $passedArgs;
	$image_size = $arr_image_size[$passedArgs0];
}else{
	$pageHeading = "Contents";
	$passedArgs0 =  "";
	$image_size = "900x600";
}
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List '.$pageHeading), ['action' => 'index',$passedArgs0], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contents form content">
            <?= $this->Form->create($content,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Edit '.$pageHeading) ?></legend>
                <?php
                echo $this->Form->control('contenttype',['type'=>'hidden','value'=>$passedArgs0]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('details');
                    ?>
                    <?= $this->Html->image('contents/'.$content->imgname.'-small-'.$content->id.'.jpg') ?>
                    <br><?= $image_size?> <input type="file" name="fileToUpload" id="fileToUpload">
                    <?php
                    echo $this->Form->control('metatitle');
                    echo $this->Form->control('metakey');
                    echo $this->Form->control('metades');
                    echo $this->Form->control('seq');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
