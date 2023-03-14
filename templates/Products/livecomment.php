<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<div class="row">
    
    <div class="column-responsive column-50">
        <div class="products view content">
            <h3><?= h($product->title) ?></h3>
            <table>
                <tr>
                <th colspan=2>
                <div class="embed-responsive embed-responsive-16by9">
                    <?php 
                    $live_code = $product->details;
                    if(filter_var($live_code, FILTER_VALIDATE_URL)){
                        ?>
                        <iframe src="<?php echo $live_code?>" title=" player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php
                    }else{
                        echo  $live_code;
                    }
                    ?>
                    </div>
                    </td>
                </tr>
                
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($product->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($product->slug) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($product->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($product->created) ?></td>
                </tr>
                
            </table>
        </div>
    </div>

    <div class="column-responsive column-50">
        <h2>Live highlight</h2>
        <div class="comments form content">
            <?= $this->Form->create($comment) ?>
            <fieldset>
                <?php
                    //echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->hidden('product_id', ['value' => $product->id]);
                    //echo $this->Form->control('parent_id', ['options' => $parentComments, 'empty' => true]);
                    //echo $this->Form->control('name');
                    //echo $this->Form->control('email');
                    //echo $this->Form->control('phone');
                    echo $this->Form->control('body');
                    echo $this->Form->hidden('status',['value'=>1]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
