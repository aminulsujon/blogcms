<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
$passedArgs = $this->request->getParam('pass');
if(!empty($passedArgs[0])){
    $passedArgs0 = $passedArgs[0];
}else{
    $passedArgs0 = 1;
}
switch ($passedArgs0) {
    case 1:
        $heading = "News";
        break;
    case 2:
        $heading = "Photo Gallery";
        break;
    case 3:
        $heading = "Video Gallery";
        break;
    case 4:
        $heading = "LIVE";
        break;
    default:
        $heading = "News";
        break;
}
echo $this->Html->script('ckeditor/ckeditor');
?>
<style>
    #tags-ids{height: auto}
    #tags-ids option{display: block;border: 1px solid #ddd;margin: 5px;padding: 5px;float: left;margin-bottom: 5px;}
    .image-input{border:1px solid #ddd;padding:10px;margin-bottom:10px}
    .image-input input{width:100%;border: 1px solid #ddd;}
    .image-input-album{width:100%;background:#eee;padding:20px;margin-bottom:10px}
    .image-input-album input{width:100%}
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
    .column-responsive{width:100%}
    #imageAppend .image-input{position:relative}
    #imageAppend .image-input .close{position:absolute;right:0;top:0;background:#b40000;color:#fff;}
</style>
<div class="content">
    <div class="block">
        <div class="row">
            <div class="column-responsive">
                <div class="products form content mb-4">
                    
                <?= $this->Form->create($product,['type'=>'file']) ?>
                    <fieldset>
                        <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                            <h6>Album Entry</h6>
                            <div>
                                <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'photo'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                                <a href="javascript:void(0);" class="btn btn-outline-warning mr-5 mb-5">
                                    <i class="fa fa-exclamation-triangle mr-5"></i> Preview
                                </a>
                                <button type="submit" onclick="return confirm_action()" class="btn btn-outline-success mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i> Publish
                                </button>
                            </div>
                        </div>
                        <?php
                            echo $this->Form->control('title',['label'=>'Album Title *','required'=>'required']);
                            echo $this->Form->hidden('genus',['value'=>2]);
                            echo $this->Form->control('summary',['label'=>'Album Summary*','type'=>'textarea','required'=>'required']);
                            ?>
                            <img id="blah" src="#" alt="your image" />
                            <div class="image-input">
                                <div id="imageNotice">
                                    Your image size not matched, The image size must be of widht 800px and height 450px;
                                </div>
                                Feature Photo (Image size 800x450px) *
                                <input type="file" name="fileToUpload0" required="required" id="imageFile" onchange="readURL(this);">   <br><br> 
                                <input type="text" name="caption0" placeholder="Image Caption">
                                <div class="cb"></div>
                            </div>
                            <input type="hidden" name="imageCounter" id="imageCounter" value=0>
                            
                            <div id="imageAppend"></div>

                            <a id="photoAdder" class="btn btn-primary" href="javascript:void(0);">Add Photo</a>
                            <br>
                            <br>
                            <?php
                            echo 'Publish '.$this->Form->control('status',['options'=>$arr_publish,'type'=>'select','label'=>false]);
                            
                        ?>
                    </fieldset>
                    <!-- <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?> -->
                    <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                        <h6></h6>
                        <div>
                            <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'photo'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                            <a href="javascript:void(0);" class="btn btn-outline-warning mr-5 mb-5">
                                <i class="fa fa-exclamation-triangle mr-5"></i> Preview
                            </a>
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
<div id="imageInput" style="display:none">
    <div class="image-input" id="iiIMGID">
        <i onclick="removeThis('iiIMGID');" class="close">x</i>
        Feature Photo (Image size 800x450px) *
        <input type="file" name="fileToUploadIMGID"><br><br> 
        <input type="text" name="captionIMGID" placeholder="Image Caption">
        <div class="cb"></div>
    </div>
</div>

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
<style>
#imageNotice{
    display: none;
    background: red;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    margin-bottom: 10px;
}
</style>

<script>
    var _URL = window.URL || window.webkitURL;
    $("#imageFile").change(function (e) {
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            var objectUrl = _URL.createObjectURL(file);
            img.onload = function () {
                if(this.width == 800 && this.height == 450){
                    $("#imageNotice").hide();
                }else{
                    $("#imageNotice").show();
                    $('#imageFile').val('');
                }
                _URL.revokeObjectURL(objectUrl);
            };
            img.src = objectUrl;
        }
    });

    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    
</script>
