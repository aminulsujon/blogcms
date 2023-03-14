<?php 
if(!empty($page)){
    $page = json_decode($page,true);
}
?>
<div class="container">
    <!-- Main Content Start -->
    <div class="main--content">
        <!-- Post Item Start -->
        <div class="post--item post--single pd--30-0">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="post--info">
                        <div class="title">
                            <h2 class="h4"><?= $page['title'] ?></h2>
                        </div>
                    </div>

                    <div class="post--content">
                        <?= $page['details'] ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post Item End -->

        <!-- Info Blocks Start -->
        
    </div>
    <!-- Main Content End -->
</div>