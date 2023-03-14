
<style>
#imageNotice{
    display: none;
    background: red;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    margin-bottom: 10px;
}
.vof{margin:20px 0}
.vo {
    border: 1px solid #ddd;
    padding: 10px;
    width: 200px;
    display: inline-block;
    margin-right: 10px;
    background: rgba(0,0,0,.05);
}
</style>
<div class="content">
    <div class="block">
        <div class="row">
            <div class="column-responsive" style="width:100%">
                <div class="products form content mb-4">
                    
                <?= $this->Form->create($vote,['type'=>'file']) ?>
                    <fieldset>
                        <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                            <h6>Poll Entry</h6>
                            <div>
                                <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'index'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
                                <a href="javascript:void(0);" class="btn btn-outline-warning mr-5 mb-5">
                                    <i class="fa fa-exclamation-triangle mr-5"></i> Preview
                                </a>
                                <button type="submit" onclick="return confirm_action()" class="btn btn-outline-success mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i> Publish
                                </button>
                            </div>
                        </div>
                        <?php
                            echo $this->Form->control('title',['required'=>'required']);
                            
                            //echo $this->Form->control('Uploads['.$i.'][id]',['value'=>$upload['id'],'type'=>'hidden']);
                            echo '<div class="vof">';
                            echo '<div class="vo">';
                            echo $this->Form->control('Voteoptions[0][voption]',['label'=>'Option 1','value'=>'হ্যাঁ']);
                            echo $this->Form->control('Voteoptions[0][vcount]',['label'=>'Vote']);
                            echo '</div>';
                            echo '<div class="vo">';
                            echo $this->Form->control('Voteoptions[1][voption]',['label'=>'Option 2','value'=>'না']);
                            echo $this->Form->control('Voteoptions[1][vcount]',['label'=>'Vote']);
                            echo '</div>';
                            echo '<div class="vo">';
                            echo $this->Form->control('Voteoptions[2][voption]',['label'=>'Option 3','value'=>'মন্তব্য নেই']);
                            echo $this->Form->control('Voteoptions[2][vcount]',['label'=>'Vote']);
                            echo '</div>';
                            echo '</div>';
                            ?>
                            <img id="blah" src="#" alt="your image" />
                            <div class="image-input">
                                <div id="imageNotice">
                                    Your image size not matched, The image size must be of widht 800px and height 450px;
                                </div>
                                Share Photo (Image size 800x450px) *<br>
                                <input type="file" name="fileToUpload1" id="imageFile" onchange="readURL(this);"><br><br> 
                            </div>
                            <br>
                            <?php
                            echo 'Publish '.$this->Form->control('status',['options'=>$arr_publish,'type'=>'select','label'=>false]);
                            
                        ?>
                    </fieldset>
                    <!-- <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?> -->
                    <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                        <h6></h6>
                        <div>
                            <?= $this->Html->link(__('<i class="fa fa-times mr-5"></i> Cancel'), ['action' => 'index'], ['onclick'=>"return confirm_action()",'class' => 'btn btn-outline-danger mr-5 mb-5','escape'=>false]) ?>
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