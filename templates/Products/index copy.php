<style>
.in-cir {
    position: absolute;
    background: #fff;
    padding: 5px 5px;
    line-height: 10px;
    border-radius: 50%;
    border-top-left-radius: 0;
}
.text-black{color:#000;}
</style>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('Top News'), ['action' => 'top'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('New news'), ['action' => 'add'], ['class' => 'button float-right','style'=>'margin-right:15px']) ?>
    <h3><?= __('Latest News') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('topseq','Top') ?></th>
                    <th><?= $this->Paginator->sort('live','Home') ?></th>
                    <th>Photo</th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions" width="200"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): 
                
                if(empty($product->topseq)){
                	$link_to = "addtop";
                	$action_icon = "add_circle_outline";
                	$color_cls = "darkgray";
                }else{
                	$link_to = "removtop";
                	$action_icon = "remove_circle_outline";
                	$color_cls = "green";
                }
                if(empty($product->live)){
                	$linkl_to = "addcategorytop";
                	$actionl_icon = "add_circle_outline";
                	$colorl_cls = "darkgray";
                }else{
                	$linkl_to = "removecategorytop";
                	$actionl_icon = "remove_circle_outline";
                	$colorl_cls = "green";
                }
                if(empty($product->headingbox)){
                	$linkh_to = "addheadingbox";
                	$actionh_icon = "add_circle_outline";
                	$colorh_cls = "darkgray";
                }else{
                	$linkh_to = "removeheadingbox";
                	$actionh_icon = "remove_circle_outline";
                	$colorh_cls = "green";
                }
                if(empty($product->featurebox)){
                	$linkf_to = "addfeaturebox";
                	$actionf_icon = "add_circle_outline";
                	$colorf_cls = "darkgray";
                }else{
                	$linkf_to = "removefeaturebox";
                	$actionf_icon = "remove_circle_outline";
                	$colorf_cls = "green";
                }
                ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= $this->Html->link(__('<i class="material-icons '.$color_cls.'">'.$action_icon.'</i>'), ['controller' => 'Products','action' => 'maketop', $product->id],['escape'=>false,'title'=>$link_to]) ?></td>
                    <td>
                        <?= $this->Html->link(__('<i class="material-icons '.$colorl_cls.'">'.$actionl_icon.'</i>'), ['controller' => 'Products','action' => 'makelive', $product->id],['escape'=>false,'title'=>$linkl_to]) ?>
                        <?= $this->Html->link(__('<i class="material-icons '.$colorh_cls.'">'.$actionh_icon.'h</i>'), ['controller' => 'Products','action' => 'makeheadingbox', $product->id],['escape'=>false,'title'=>$linkh_to]) ?>
                        <?= $this->Html->link(__('<i class="material-icons '.$colorf_cls.'">'.$actionf_icon.'f</i>'), ['controller' => 'Products','action' => 'makefeaturebox', $product->id],['escape'=>false,'title'=>$linkf_to]) ?>
                    </td>
                    <td><?php 
                    if(!empty($product->upvideos[0]['id'])){ 
                        $has_video = '<span class="in-cir"><i class="material-icons">play_circle_outline</i></span>';
                    }else{
                        $has_video = '';
                    }
                    echo $has_video;
                    //pr($product);die();
                    if(!empty($product->uploads[0]['id'])){ 
                        $img = 'img/products/'.$product['uploads'][0]['imgname'].'-thumb-'.$product['uploads'][0]['id'].'.jpg';
                        if(file_exists($img)){
                        ?><img class="img-1 img-responsive" src="<?= $head_url ?>img/products/<?= h($product['uploads'][0]['imgname']) ?>-thumb-<?= h($product['uploads'][0]['id']) ?>.jpg" alt="Image"><?php
                        }else{
                        ?><span class="img-off"></span><?php
                        }
                        ?><?php 
                    }?></td>
                    <td><small class="text-success"><?= h($product->created) ?></small><br><?= h($product->title) ?>
                        <br><small class="text-black"><i><?php
                        if(!empty($product->tags[0]['title'])){
                            echo $product->tags[0]['title'];
                        }
                        ?></i></small>
                    </td>
                    <td><?= $this->Html->link($arr_status[$this->Number->format($product->status)],['action'=>'changestatus',$product->id],['title'=>'change status']) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="material-icons">add_a_photo</i>'), ['controller' => 'Uploads','action' => 'index', $product->id],['escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="material-icons">play_circle_outline</i>'), ['controller' => 'Upvideos','action' => 'index', $product->id],['escape'=>false]) ?>
                        <?php // $this->Html->link(__('<i class="material-icons">remove_red_eye</i>'), ['action' => 'view', $product->id],['escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="material-icons">edit</i>'), ['action' => 'edit', $product->id],['escape'=>false]) ?>
                        <?php // $this->Form->postLink(__('<i class="material-icons">healing</i>'), ['action' => 'delete', $product->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
