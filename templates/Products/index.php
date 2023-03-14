<style>
.br a {
    display: block;
    border: 1px solid #ddd;
    margin-bottom: 5px;
    text-align: center;
}
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}
.slider.round {
    border-radius: 34px;
}
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}
.slider.round {
    border-radius: 34px;
}
.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}
.active .slider {
    background-color: #2196F3;
}
.active .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}
.slider.round:before {
    border-radius: 50%;
}
.on-display{width:105px}
.edit-display{width:71px}
.underline:hover{text-decoration:underline}
.ed{width:111px}
.actions{width:233px}
</style>
<div class="content">
          <!-- Dynamic Table Full -->
          <div class="block">
            
            <!-- <?= $this->Html->link(__('Top News'), ['action' => 'top'], ['class' => 'button float-right']) ?> -->
            <div class="block-header block-header-default" style="background:#fff">
                <h6>News List</h6>
                <div>
                    <?= $this->Html->link(__('<i class="fa fa-plus mr-5"></i> New news'), ['action' => 'add'], ['class' => 'btn btn-alt-success mr-5 mb-5','escape'=>false]) ?>
                </div>
            </div>
            <div style="margin: 14px 20px">
            <?= $this->Form->create(null,['url'=>['controller'=>'products','action'=>'index'],'class'=>'']) ?>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search news title" name="txtSearch" required="required" value="<?= $txtSearch ?? ''?>">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            <?= $this->Form->end() ?>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row" style="display:none">
                      <div class="col-sm-12 col-md-6">
                          <div class="dataTables_length" id="DataTables_Table_1_length">
                              <label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="custom-select custom-select-sm form-control form-control-sm">
                                  <option value="5">5</option><option value="8">8</option><option value="15">15</option><option value="20">20</option></select> entries</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_1"></label>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-sm-12">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <!-- <thead>
                  <tr><th class="text-center sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending"></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th><th class="d-none d-sm-table-cell sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Access</th><th class="text-center sorting_disabled" style="width: 15%;" rowspan="1" colspan="1" aria-label="Profile">Profile</th></tr>
                </thead> -->
                <thead>
                    <tr>
                        <th>View</th>
                        <th>Photo</th>
                        <th>News Headline</th>
                        <th class="on-display">On Display</th>
                        <th>Publish</th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sl = 1;
                    //pr($products);die();
                    foreach ($products as $product): 
                    if($product->status==1){
                      $color_active = "success";
                    }elseif($product->status==2){
                      $color_active = "danger";
                    }
                    ?>
                    <tr>
                        <td>
                        <?php
                        if($product->status == 1){
                            ?><a class="underline" target="_blank" href="<?= $siteoptions['web_url'] ?>/news/<?= $product->id ?>"><?= $product->id ?></a></td><?php
                        }else{
                            echo $product->id;
                        }
                        ?>    
                        
                        <td><?php 
                        if(!empty($product->upvideos[0]['id'])){ 
                            $has_video = '<span class="in-cir"><i class="material-icons">play_circle_outline</i></span>';
                        }else{
                            $has_video = '';
                        }
                        echo $has_video;
                        $img_index = sizeof($product->uploads)-1;
                        //pr($img_index);die();
                        if(!empty($product->uploads[0]['id'])){ 
                            $img = 'img/products/'.$product['uploads'][$img_index]['imgname'].'-thumb-'.$product['uploads'][$img_index]['id'].'.jpg';
                            if(file_exists($img)){
                            ?><img class="img-1 img-responsive" src="<?= $siteoptions['web_url'] ?>/img/products/<?= h($product['uploads'][$img_index]['imgname']) ?>-thumb-<?= h($product['uploads'][$img_index]['id']) ?>.jpg" alt="Image"><?php
                            }else{
                            ?><span class="img-off"></span><?php
                            }
                            ?><?php 
                        }?></td>
                        <td><h5 class="mb-0"><?= h($product->title) ?></h5>
                            <small class="">Published: <?= date('d M Y H:i',strtotime($product->created)) ?></small><br>
                            <small class="">Update: <?= date('d M Y H:i',strtotime($product->modified)) ?></small><br>
                            <small class=""><?php
                            if(!empty($product->tags)){
                                echo "Category: ";
                                if(sizeof($product->tags)>1){
                                    $set_comma = ", ";
                                }else{
                                    $set_comma = "";
                                }
                                $i = 1;
                                foreach ($product->tags as $tag){
                                    if(sizeof($product->tags) <= $i){
                                        $set_comma = "";
                                    }
                                    echo $tag['title'].$set_comma;
                                    $i++;
                                }
                            }
                            ?></small><br>
                            <small class="">View: <?= $product->entireview ?></small>
                        </td>
                        <td>
                        <?php
                        if(!empty($product->live)){
                            $onDisplay = $arr_onLead[$this->Number->format($product->live)];
                        }else{
                            $onDisplay = "None";
                        }
                        echo $onDisplay;
                        ?>
                        </td>
                        <td>
                            <?php $switch_status = ""; if($product->status == 1){$switch_status = "active";}?>
                            <a onclick="return confirm_action()" href="<?= $siteoptions['web_url'] ?>/products/changestatus/<?= $product->id ?>" title="Change status">
                                <label class="switch <?= $switch_status ?>">
                                    <span class="slider round"></span>
                                </label>  
                            </a> 
                        </td>
                        <td class="actions">
                            <!-- <?= $this->Html->link(__('<i class="si si-camera fa-2x"></i>'), ['controller' => 'Uploads','action' => 'index', $product->id],['escape'=>false]) ?>&nbsp;&nbsp; -->
                            <!-- <?= $this->Html->link(__('<i class="material-icons">play_circle_outline</i>'), ['controller' => 'Upvideos','action' => 'index', $product->id],['escape'=>false]) ?> -->
                            <?php // $this->Html->link(__('<i class="material-icons">remove_red_eye</i>'), ['action' => 'view', $product->id],['escape'=>false]) ?>
                            <?= $this->Html->link(__('<i class="fa fa-pencil"></i> News Edit'), ['action' => 'edit', $product->id],['escape'=>false,'class'=>'btn btn-outline-primary mr-5 mb-5 edit-display ed']) ?>
                            <?= $this->Html->link(__('<i class="fa fa-times"></i> Delete'), ['action' => 'remove', $product->id],['onclick'=>"return confirm_action()",'escape'=>false,'class'=>'btn btn-outline-danger mr-5 mb-5']) ?>
                            <?php // $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['action' => 'delete', $product->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                        </td>
                    </tr>
                    <?php 
                    $sl++;
                    endforeach; ?>
                </tbody>
                
              </table>
            </div>
        </div>
        <div class="row mt-4">
                <!-- <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 8 of 20 entries</div>
                </div> -->
                <div class="col-sm-12">
                    <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p class="dataTables_info"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                </div>
                </div>
            </div>
        </div>
            </div>
          </div>
          <!-- END Dynamic Table Full -->

          <!-- Dynamic Table Full Pagination -->
          
          <!-- END Dynamic Table Full Pagination -->

          <!-- Dynamic Table Simple -->
          
          <!-- END Dynamic Table Simple -->
        </div>