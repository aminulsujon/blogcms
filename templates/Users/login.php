<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="">
    
    <div class="" style="width: 250px;margin: 0 auto;">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset class="mb-4">
                <legend><?= __('Login here') ?></legend>
                <?php
                    echo $this->Form->control('email',['class'=>'form-control']);
                    echo $this->Form->control('password',['class'=>'form-control']);
                ?>
            </fieldset>

            <?= $this->Form->button(__('Submit',['class'=>'btn btn-primary'])) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
