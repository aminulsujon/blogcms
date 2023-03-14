<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>নিউজ আপডেট</h2>
            <span></span>
        </div>
        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                <?php 
                $i = 0;
                if(!empty($products_latest)){
                    $products_latest = json_decode($products_latest,true);
                    foreach($products_latest as $product){
                        ?>
                        <li>
                            <h3 class="h3"><a href="<?= $siteoptions['web_url'] ?>/news/<?= $product['id'] ?>"><?= $product['title']?></a></h3>
                        </li>
                        <?php
                        if($i>9){break;}
                    }
                    $i++;
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<!-- News Ticker End -->