<?= $this->element('usn/boxHeading') ?>
<?= $this->element('usn/boxFeature') ?>

<!-- Top News -->
<!-- Top Content Start -->
<?= $this->element('usn/boxTop');?>
<?= $this->element('adtop');?>


<!--  Main Content Section Start -->


<!-- Category Contents-->
<!-- Full length 1-->
<?php
if(!empty($products_special)){
    $products_special = json_decode($products_special,true);
    $i = 0;
    foreach($products_special as $tag){
        //if($i<20){
            if($i == 8){
                echo '<!-- Video Start Main Content -->';
                echo $this->element('usn/video');
                echo '<!-- Video End Main Content -->';
            }
            echo $this->element('usn/category/layout'.$tag['layout'],['tag'=>$tag]);
        //}
        $i++;
    }
}
echo $this->element('usn/photo');
?>

