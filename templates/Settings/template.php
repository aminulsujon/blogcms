<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote[]|\Cake\Collection\CollectionInterface $votes
 */
$web = json_decode(json_encode($web),true);
// pr($web);
?>
<style>.actions{width:233px}</style>
<div class="content">
          <!-- Dynamic Table Full -->
          <div class="block">
            
            <div class="block-header block-header-default" style="background:#fff">
                <h6><i class="si si-settings"></i> Settings</h6>
            </div>
            <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer">
                <tr><td>
                    <?php
                    
                    $arr_template = ['stablo'=>'Stablo'];
                    // echo $this->Form->create(NULL,['url'=>'https://www.news24bd.net/siteoptions/edit/'.$so['id']]);
                    echo $this->Form->create(NULL,['url'=>'http://localhost/news24/siteoptions/edit/3']);
                    echo $this->Form->control('id',['type'=>'hidden','value'=>3]);
                    // echo $this->Form->control('ovalue',['options'=>$arr_template]);
                    ?>
                    <select name="ovalue" id="ovalue">
                        <?php 
                        foreach($arr_template as $key => $value){
                            if($web[2]['ovalue'] == $key){
                                $sel = "selected";
                            }else{
                                $sel = "";
                            }
                            ?><option value="<?= $key?>" <?= $sel ?> ><?= $value ?></option><?php
                        }
                        ?>
                    </select>
                    <br>
                    <br>
                    <?php
                    echo $this->Form->button(__('Update'),['class'=>'btn btn-outline-success mr-5 mb-5']);
                    echo $this->Form->end();
                   ?>
                </td></tr>
            </table>
    </div>
    
</div>

</div>
</div>
