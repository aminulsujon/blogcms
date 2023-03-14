<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote[]|\Cake\Collection\CollectionInterface $votes
 */
?>
<style>.actions{width:233px}</style>
<div class="content">
          <!-- Dynamic Table Full -->
          <div class="block">
            
            <div class="block-header block-header-default" style="background:#fff">
                <h6><i class="si si-settings"></i> Home Setting</h6>
            </div>
            <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer">
                <?php
                $setEdit = [27];
                $setEditArea = [17,18];
                // pr($web );die();
                foreach($web as $so):
                    if(in_array($so['id'],$setEdit)):
                        echo "<tr><td>";
                        echo $this->Form->create(NULL,['url'=>'https://www.news24bd.net/siteoptions/edit/'.$so['id']]);
                        // echo $this->Form->create(NULL,['url'=>'http://localhost/news24/siteoptions/edit/'.$so['id']]);
                        echo ucfirst(substr($so['okey'], 4));
                        echo $this->Form->control('id',['type'=>'hidden','value'=>$so['id']]);
                        if(in_array($so['id'],$setEditArea)){
                            echo $this->Form->control('ovalue',['label'=>false,'type'=>'textarea','value'=>$so['ovalue']]);
                        }else{
                            echo $this->Form->control('ovalue',['label'=>false,'value'=>$so['ovalue']]);
                        }
                        
                        echo $this->Form->button(__('Update'),['class'=>'btn btn-outline-success mr-5 mb-5']);
                        echo $this->Form->end();
                        echo "</td></tr>";
                    endif;
                endforeach;
                ?>
            </table>
    </div>
    
</div>

</div>
</div>