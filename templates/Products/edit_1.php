<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->script('ckeditor/ckeditor');
//pr($reporters);
?>
<style>
    .eimage{padding:10px;border:1px solid #fff;background:#fff}
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
</style>
<div class="content">
    <div class="block">
    <div class="column-responsive">
        <div class="products form content">
        <?= $this->Form->create($product,['type'=>'file','onsubmit'=>'checkNewsForm();']) ?>
            <fieldset>
                <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                    <h6>News Update</h6>
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
                    echo 'Category *<div class="abcCheck">'.$this->Form->control('tags._ids', ['options' => $tags,'type'=>'select','multiple'=>'checkbox','label'=>false])."</div>";
                    echo $this->Form->control('title',['label'=>'News Headline *','required'=>'required']);
                    echo $this->Form->hidden('genus');
                    echo $this->Form->control('shoulder',['label'=>'News Shoulder']);
                    echo $this->Form->control('hanger',['label'=>'News Hanger']);
                    echo $this->Form->control('reporter',['label'=>'Reporter *','required'=>'required']);
                    ?>
                    <div class="reporterbox">
                        <span onclick='setReporter("অনলাইন ডেস্ক");'>অনলাইন ডেস্ক</span>
                        <span onclick='setReporter("নিউজ ২৪ ডেস্ক");'>নিউজ ২৪ ডেস্ক</span>
                        <span onclick='setReporter("নিউজ ২৪ প্রতিবেদন");'>নিউজ ২৪ প্রতিবেদন</span>
                        <span onclick='setReporter("আইটি ডেস্ক");'>আইটি ডেস্ক</span>
                        <span onclick='setReporter("স্পাের্টস ডেস্ক");'>স্পাের্টস ডেস্ক</span>
                        <span onclick='setReporter("ক্রীড়া প্রতিবেদক");'>ক্রীড়া প্রতিবেদক</span>
                        <span onclick='setReporter("লাইফস্টাইল ডেস্ক");'>লাইফস্টাইল ডেস্ক</span>
                        <span onclick='setReporter("বিনােদন ডেস্ক");'>বিনােদন ডেস্ক</span>
                        <span onclick='setReporter("আন্তর্জাতিক ডেস্ক");'>আন্তর্জাতিক ডেস্ক</span>
                        <span onclick='setReporter("বিজনেস ডেস্ক");'>বিজনেস ডেস্ক</span>
                        <span onclick='setReporter("সম্পাদকীয়");'>সম্পাদকীয়</span>
                        <span onclick='setReporter("ক্যাম্পাস ডেস্ক");'>ক্যাম্পাস ডেস্ক</span>
                        <span onclick='setReporter("সংবাদ বিজ্ঞপ্তি");'>সংবাদ বিজ্ঞপ্তি</span>
                    </div>
                    <?php
                    echo $this->Form->control('summary',['label'=>'News Summary*','type'=>'textarea','required'=>'required']);
                    echo $this->Form->control('details',['id'=>'texteditor','label'=>'News Details']);
                    echo $this->Html->link('Upload Inner Image',['controller'=>'Uploads','action'=>'inner'],['target'=>'_blank','class'=>'btn btn-outline-secondary min-width-125']).'<br><br>';
                    echo $this->Form->control('tagged',['label'=>'Tags *','type'=>'text','required'=>'required','placeholder'=>'Write a word, then press comma']);
                    echo 'On Lead '.$this->Form->control('live',['label'=>false,'type'=>'select','options'=>$arr_onLead,'empty'=>'None']);
                    $img_id = '';
                    if(!empty($product['uploads'])){
                        
                        foreach($product['uploads'] as $upload){
                            if(!empty($upload['caption'])){$img_caption = $upload['caption'];}else{$img_caption = "";}
                            $img_id = $upload['id'];
                            $img_url =  $siteoptions['web_resource'].'/img/products/'.$upload['imgname'].'-small-'.$upload['id'].'.jpg';
                            echo '<div class="eimage">';
                            echo $this->Html->image($img_url,['title'=>$upload['caption']]);
                            echo '<br><br><b>Caption: </b>'.$img_caption;
                            //echo $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['controller' => 'uploads','action' => 'deletep', $upload['id']], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {}?')]);
                            //echo $this->Html->link('Delete',['controller'=>'uploads','action'=>'deletep',$upload['id']],['escape'=>false]);
                            echo '</div>';
                            
                        }
                    }
                    ?>
                    <br>
                    <div class="image-input">
                        <div id="imageNotice">
                            Your image size not matched, The image size must be of widht 800px and height 450px;
                        </div>
                    Change Feature Photo (Image size 800x450px))
                        <input type="file" name="fileToUpload1" id="imageFile">    <br><br>
                        <input type="hidden" name="uploadid1" value="<?= $img_id ?>">
                        <input type="text" name="caption1" placeholder="Image Caption">
                        <div class="cb"></div>
                    </div><?php
                    echo $this->Form->control('pDate',['label'=>'Change Time and Date (১৯ জানুয়ারী ২০২২, ০৪:৪৭ পিএম)']);
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
<?php
if($product->genus != 4){
    ?>
    <script type="text/javascript">
        CKEDITOR.replace( 'texteditor' );
    </script>

    <?php
}  
?>
<style>#imageNotice{display: none;
    background: red;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    margin-bottom: 10px;}</style>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
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
</script>
<script>
function checkNewsForm(){
checked = $("input[type=checkbox]:checked").length;
if(!checked) {
    alert("Please Select Category");
    event.preventDefault();
    window.scrollTo(0, 0);
    $(".abcCheck").attr('style','border:1px solid red')
    return false;
}
return true;
}
function setReporter(name){
    $("#reporter").val(name);
}
</script>
