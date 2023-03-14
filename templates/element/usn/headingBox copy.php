<?php 
// pr($products_headingbox);
$products_headingbox = json_decode($products_headingbox,true);
?>
<div class="main--content">
    <section class="container">
        <div class="owl-wrapper">
          <div class="owl-carousel owl-theme">
            <?php
            foreach($products_headingbox as $product){
                ?>
                <div class="item">
                    <h4><?= $product['title'] ?></h4>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
</div>