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
// echo $this->Html->script('ckeditor');
?>
<style>
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
        <div class="row">
            <div class="column-responsive">
                <div class="products form content mb-4">
                    
                <?= $this->Form->create($product,['type'=>'file','onsubmit'=>'checkNewsForm();']) ?>
                    <fieldset>
                        <div class="block-header" style="padding-left: 0;padding-right: 0;padding-top: 0;">
                            <h6>News Entry</h6>
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
                            echo 'Category *<div class="abcCheck">'.$this->Form->control('tags._ids', ['options' => $tags,'type'=>'select','multiple'=>'checkbox','label'=>false])."</div>";
                            echo $this->Form->control('title',['label'=>'News Headline *','required'=>'required']);
                            echo $this->Form->hidden('genus',['value'=>$passedArgs0]);
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
                            echo $this->Form->control('details',['id'=>'texteditor','label'=>'News Details *']);
                            echo $this->Html->link('Upload Inner Image',['controller'=>'Uploads','action'=>'inner'],['target'=>'_blank','class'=>'btn btn-outline-secondary min-width-125']).'<br><br>';
                            echo $this->Form->control('tagged',['label'=>'Tags *','type'=>'text','required'=>'required','placeholder'=>'Write a word, then press comma']);
                            echo 'On Lead '.$this->Form->control('live',['label'=>false,'type'=>'select','options'=>$arr_onLead,'empty'=>'None']);
                            ?>
                            
                            <div class="image-input">
                            <div id="imageNotice">
                                Your image size not matched, The image size must be of widht 800px and height 450px;
                            </div>
                            Feature Photo (Image size 800x450px) *
                                <input type="file" name="fileToUpload1" required="required" id="imageFile">   <br><br> 
                                <input type="text" name="caption1" placeholder="Image Caption">
                                <div class="cb"></div>
                            </div>
                            <?php
                            echo $this->Form->control('pDate',['label'=>'Change Time and Date (১৯ জানুয়ারী ২০২২, ০৪:৪৭ পিএম)']);
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
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
 <!--<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> -->
<script src="<?= $siteoptions['web_url'] ?>/js/ckeditor2.js"></script>

    <script>
    // ClassicEditor
    //     .create( document.querySelector( '#texteditor' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
        
ClassicEditor
    .create( document.querySelector( '#texteditor' ), {
        fontColor: {
            colors: [
                {
                    color: 'hsl(0, 0%, 0%)',
                    label: 'Black'
                },
                {
                    color: 'hsl(0, 0%, 30%)',
                    label: 'Dim grey'
                },
                {
                    color: 'hsl(0, 0%, 60%)',
                    label: 'Grey'
                },
                {
                    color: 'hsl(0, 0%, 90%)',
                    label: 'Light grey'
                },
                {
                    color: 'hsl(0, 0%, 100%)',
                    label: 'White',
                    hasBorder: true
                },
                {
                    color: 'hsl(0, 10%, 100%)',
                    label: 'White',
                    hasBorder: true
                },

                // ...
            ]
        },
        fontBackgroundColor: {
            colors: [
                {
                    color: 'hsl(0, 75%, 60%)',
                    label: 'Red'
                },
                {
                    color: 'hsl(30, 75%, 60%)',
                    label: 'Orange'
                },
                {
                    color: 'hsl(60, 75%, 60%)',
                    label: 'Yellow'
                },
                {
                    color: 'hsl(90, 75%, 60%)',
                    label: 'Light green'
                },
                {
                    color: 'hsl(120, 75%, 60%)',
                    label: 'Green'
                },
                {
                    color: 'hsl(200, 100%, 45%)',
                    label: 'Blue'
                },
                {
                    color: 'hsl(0, 100%, 50%)',
                    label: 'Reda'
                },
                {
                    color: 'hsl(0, 100%, 65%)',
                    label: 'Redaa'
                },
                {
                    color: 'hsl(348, 100%, 37%)',
                    label: 'Redaaa'
                },
                {
                    color: 'hsl(133, 57%, 40%)',
                    label: 'Dark Green'
                },
                {
                    color: 'hsl(260, 68%, 28%)',
                    label: 'Purple'
                },
                {
                    color: 'hsl(277, 73%, 27%)',
                    label: 'Light Purple'
                },
                {
                    color: 'hsl(52, 100%, 50%)',
                    label: 'Yellow'
                },
                {
                    color: 'hsl(171, 100%, 33%)',
                    label: 'Green'
                },
                
                
                
                
                
                
                
                
                

                // ...
            ]
        }
    } )
    .then( )
    .catch( );

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

    function setdata(){
        $("form").submit(function (event) {
            var formData = {
            name: $("#name").val(),
            email: $("#email").val(),
            superheroAlias: $("#superheroAlias").val(),
            };

            $.ajax({
                type: "POST",
                //url: "process.php",
                data: formData,
                dataType: "json",
                encode: true,
                }).done(function (data) {
                console.log(data);
            });

            event.preventDefault();
        });
    }
</script>
