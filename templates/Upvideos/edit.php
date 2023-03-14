
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upvideo $upvideo
 */
?>
<div class="content">
    <div class="block">
        <div class="row">
            <div class="column-responsive" style="width:100%">
                <div class="products form content mb-4">
                    <?= $this->Form->create($upvideo) ?>
                    <fieldset>
                        <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                            <h6>Video Edit</h6>
                            <div>
                                <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'index'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                                <button type="submit" onclick="return confirm_action()" class="btn btn-outline-success mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i> Publish
                                </button>
                            </div>
                        </div>
                        <div>
                        <?php
                            //echo $this->Form->control('user_id', ['options' => $users]);
                            //echo $this->Form->control('product_id', ['options' => $products]);
                            echo $this->Form->control('title',['required'=>'required']);
                            echo $this->Form->control('category',[]);
                            //echo $this->Form->control('sourcelink');
                            echo $this->Form->control('embedlink',['required'=>'required']);
                            //echo $this->Form->control('details');
                            //echo $this->Form->control('status');
                            //echo $this->Form->control('crated', ['empty' => true]);
                            echo 'Publish '.$this->Form->control('status',['options'=>$arr_publish,'type'=>'select','label'=>false]);
                        ?>
                        </div>
                    </fieldset>
                    <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                        <h6></h6>
                        <div>
                            <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'index'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                            <button type="submit" onclick="return confirm_action()" class="btn btn-outline-success mr-5 mb-5">
                                <i class="fa fa-plus mr-5"></i> Publish
                            </button>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function confirm_action() {
  return confirm('Are you sure?');
}
</script>
