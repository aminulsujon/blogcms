<?php $product_special = json_decode($data,true);?>
<div class="u-sep mt-4">
    <h2 class="page-heading"><a href="<?= $head_url ?>topic/<?= $product_special['slug'] ?>" class="bg-theme p-2 text-white"><?= $product_special['title']?></a></h2>
    <span class="u-sep-r"></span>
</div>
<div class="row">
<?php
foreach ($product_special['products'] as $product) {
    echo $this->element('box_news',[
        'data'=>json_encode($product),
    ]);
    ?>
    <?php
}
?>
</div>