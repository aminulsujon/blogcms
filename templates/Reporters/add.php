<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reporter $reporter
 */
echo $this->Html->script('ckeditor/ckeditor');
?>
<div class="content">
    <h2 class="content-heading">Add New</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <?= $this->Html->link(__('Reporter List'), ['action' => 'index'], ['class' => '']) ?>
            <div class="block-options">
                <button class="btn-block-option" onclick="window.history.back();">Go Back</button>
            </div>
        </div>
    <div class="column-responsive column-80">
        <div class="reporters form content">
            <?= $this->Form->create($reporter) ?>
            <fieldset>
                <legend><?= __('Add Reporter') ?></legend>
                <?php
                    echo $this->Form->control('slug',['label'=>'Slug(small-caps-no-space)']);
                    echo $this->Form->control('namebn',['label'=>'Name Bangla']);
                    echo $this->Form->control('nameen',['label'=>'Name English']);
                    echo $this->Form->control('location');
                    echo $this->Form->control('details',['id'=>'texteditor']);
                    echo $this->Form->control('status',['type'=>'radio','options'=>$arr_status]);
                    //echo $this->Form->control('products._ids', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
        CKEDITOR.replace( 'texteditor' );
    </script>

