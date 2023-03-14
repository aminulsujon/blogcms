<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
$passedArgs = $this->request->getParam('pass');
if(!empty($passedArgs[0])){
	$pageHeading = $arr_content_type[$passedArgs[0]];
	$passedArgs0 = $passedArgs[0];
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
                <legend><?= __('Add '.$pageHeading) ?></legend>
                <?php
                    echo $this->Form->control('contenttype',['type'=>'hidden','value'=>$passedArgs0]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('details');
                    echo $image_size;
                    ?>
                    <input required="required" type="file" name="fileToUpload" id="fileToUpload"><?php
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
