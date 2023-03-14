<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->script('ckeditor/ckeditor');
//pr($reporters);
?>
<style>
.eimage {
    padding: 10px;
    border: 1px solid #bfbfbf;
    background: #fff;
    margin-bottom: 20px;position: relative;
}
.imgdel{margin-bottom:10px}
    #tags-ids{height: auto}
    #tags-ids option{display: block;border: 1px solid #ddd;margin: 5px;padding: 5px;float: left;margin-bottom: 5px;}
    .image-input{border:1px solid #ddd;padding:10px;margin-bottom:10px}
    .image-input input{width:100%;border: 1px solid #ddd;}
    .reporterbox span{background:#ddd;border-radius:15px;padding:5px 10px;display:inline-block;margin-bottom: 10px;cursor: pointer}
    .reporterbox{margin-bottom: 10px}
    .catList{border: 1px solid #ddd;margin:10px 0;padding:10px}
    .catList .custom-checkbox{margin:10px !important}
    .abcCheck {
        border: 1px solid #ddd;
        margin: 10px 0;
        padding-top: 10px;
    }
    .abcCheck .checkbox {
        display: inline-block;
        width: 130px;
        margin: 10px;
    }
    .abcCheck label{}
    .abcCheck label input {
        float: left;
        width: 25px;
    }
    #imageAppend .image-input{position:relative}
    #imageAppend .image-input .close{position:absolute;right:0;top:0;background:#b40000;color:#fff;}
</style>
<div class="content">
    <div class="block">
    <div class="column-responsive">
        <div class="products form content">
        <?= $this->Form->create($product,['type'=>'file']) ?>
            <fieldset>
                <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                    <h6>Album Update</h6>
                    <div>
                        <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'index'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                        <a href="javascript:void(0);" class="btn btn-outline-warning mr-5 mb-5">
                            <i class="fa fa-exclamation-triangle mr-5"></i> Preview
                        </a>
                        <button type="submit" onclick="return confirm_action()" class="btn btn-outline-success mr-5 mb-5">
                            <i class="fa fa-plus mr-5"></i> Update
                        </button>
                    </div>
                </div>
                <?php
                    echo $this->Form->control('title',['label'=>'Album Headline *','required'=>'required']);
                    echo $this->Form->control('summary',['label'=>'Album Summary*','type'=>'textarea','required'=>'required']);
                    $img_id = '';
                    if(!empty($product['uploads'])){
                        $i=1;
                        foreach($product['uploads'] as $upload){
                            if($upload['status'] == 1){
                                if(!empty($upload['caption'])){$img_caption = $upload['caption'];}else{$img_caption = "";}

                                $img_id = $upload['id'];
                                $img_url =  $siteoptions['web_resource'].'/img/products/'.$upload['imgname'].'-small-'.$upload['id'].'.jpg';
                                echo '<div class="eimage">';
                                echo $this->Html->link('Delete',['controller'=>'uploads','action'=>'deletethis',$upload['id']],['class'=>'btn btn-danger imgdel','escape'=>false,'onclick'=>"return confirm_action()"]);
                                echo "<br>";
                                echo $this->Form->control('Uploads['.$i.'][id]',['value'=>$upload['id'],'type'=>'hidden']);
                                //echo '<a href="">Delete</a>';
                                //echo $this->Form->postLink(__('Delete'), ['controller'=>'uploads','action' => 'delete', $upload['id']], ['escape'=>false,'class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $upload['id'])]);
                                echo $this->Html->image($img_url,['title'=>$upload['caption']]);
                                echo "<br><br>";
                                echo $this->Form->control('Uploads['.$i.'][caption]',['value'=>$img_caption,'label'=>false]);
                                //echo '<br><br><b>Caption: </b>'.$img_caption;
                                //echo $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['controller' => 'uploads','action' => 'deletep', $upload['id']], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {}?')]);
                                //if($i != 1){
                                    // echo $this->Html->link('Delete',['controller'=>'uploads','action'=>'deletethis',$upload['id']],['escape'=>false,'onclick'=>"return confirm_action()"]);
                                //}
                                echo '</div>';
                                $i++;
                            }
                            
                            //break;
                        }
                    }
                    ?>
                    <br>
                    <input type="hidden" name="imageCounter" id="imageCounter" value=0>
                            
                    <div id="imageAppend"></div>

                    <a id="photoAdder" class="btn btn-primary" href="javascript:void(0);">Add Photo</a>
                    <br>
                    <br>
                    <?php
                   echo 'Publish '.$this->Form->control('status',['options'=>$arr_publish,'type'=>'select','label'=>false]);
                    
                ?>
            </fieldset>
            <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                <h6></h6>
                <div>
                    <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'index'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                    <a href="javascript:void(0);" class="btn btn-outline-warning mr-5 mb-5">
                        <i class="fa fa-exclamation-triangle mr-5"></i> Preview
                    </a>
                    <button type="submit" onclick="return confirm_action()" class="btn btn-outline-success mr-5 mb-5">
                        <i class="fa fa-plus mr-5"></i> Update
                    </button>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
<div id="imageInput" style="display:none">
    <div class="image-input" id="iiIMGID">
        <i onclick="removeThis('iiIMGID');" class="close">x</i>
        Feature Photo (Image size 800x450px) *
        <input type="file" name="fileToUploadIMGID"><br><br> 
        <input type="text" name="captionIMGID" placeholder="Image Caption">
        <div class="cb"></div>
    </div>
</div>
<style>#imageNotice{display: none;
    background: red;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    margin-bottom: 10px;}</style>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    var imageid = 0;
    $("#photoAdder").click(function(){
        imageid++;
        var formInput = $("#imageInput").html();
        var formInput = formInput.replaceAll('IMGID',imageid);
        $("#imageAppend").append(formInput);
        $("#imageCounter").val(imageid)
        
    });
    function removeThis(id){
        imageid--;
        $("#"+id).remove(); 
        $("#imageCounter").val(imageid)
    }
</script>
<script>
    // var _URL = window.URL || window.webkitURL;
    // $("#imageFile").change(function (e) {
    //     var file, img;
    //     if ((file = this.files[0])) {
    //         img = new Image();
    //         var objectUrl = _URL.createObjectURL(file);
    //         img.onload = function () {
    //             if(this.width == 800 && this.height == 450){
    //                 $("#imageNotice").hide();
    //             }else{
    //                 $("#imageNotice").show();
    //                 $('#imageFile').val('');
    //             }
    //             _URL.revokeObjectURL(objectUrl);
    //         };
    //         img.src = objectUrl;
    //     }
    // });
</script>
