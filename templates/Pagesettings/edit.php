<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagesetting $pagesetting
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <img 
                src="<?= $head_url ?>img/pagesettings/pagesetting-small-<?= $pagesetting->id?>.jpg" 
                alt="share imge">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagesetting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagesetting->id), 'class' => 'side-nav-item','style'=>'display:none']
            ) ?>
            <?= $this->Html->link(__('List Pagesettings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagesettings form content">
            <?= $this->Form->create($pagesetting,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Edit Pagesetting') ?></legend>
                <?php
                    echo $this->Form->control('pagename');
                    echo $this->Form->control('metatitle');
                    echo $this->Form->control('metakey');
                    echo $this->Form->control('metades',['type'=>'textarea']);
                    ?><input type="file" name="fileToUpload" id="fileToUpload"><?php
                   // echo $this->Form->control('status');

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
