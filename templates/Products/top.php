<?php echo $this->Html->script(array('jquery-3.4.1.min','jquery-ui'));?>
<script>$(function(){$("#sortable").sortable();$("#sortable").disableSelection();});</script>
<style>#sortable li{cursor: pointer;padding: 5px 0;list-style: none;margin:0}#sortable li span{margin-right: 5px;background: #FFE6E6;display: inline-block;text-align: center;padding: 2px 0;}#sortable li span a {background: none repeat scroll 0 0 #cdcdcd;border-radius: 10px;color: #b40000;padding: 0 5px;}.shl{display:inline;}.seqd,.seqt,.seqs{}.seqs{width:30px;}.seqt{width:45px}.seqd{width:100px}</style>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
//echo $this->element('nav');
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            
            <?= $this->Html->link(__('List news'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
        	<?= $this->Html->link(__('Top News'), ['action' => 'top'], ['class' => 'button float-right']) ?>
    		<?= $this->Html->link(__('New news'), ['action' => 'add'], ['class' => 'button float-right','style'=>'margin-right:15px']) ?>
        	<h3>Top news</h3>
			<?= $this->Form->create() ?>
       		 <ul id="sortable">
				<?php 
				/*$i = 0;$news_links = '';
				foreach ($topnews as $news):
					if(empty($news['News']['seqtop'])){
						$n_t = '';
					}else{
						$n_t = $news['News']['seqtop'];
					}
					echo "<li><span class='seqs'>[".$n_t."]</span><span class='seqd'>".date('d M Y',strtotime($news['News']['created']))."</span> <span class='seqt'>".date('H:i',strtotime($news['News']['created']))."</span>"
					.$this->Form->input('News.'.$i.'.id',array('type'=>'hidden','value'=>$news['News']['id']))
					.'- '.$news['News']['title'].'<span>'.$this->Html->link('x',array('controller'=>'news','action'=>'removeTopNews',$news['News']['id']),array('escape'=>false,'title'=>'Remove From Category rundown List'))."</span>".$this->Html->link('[x]','javascript:void(0);',array('onclick'=>"ajxrmvetpn('".$news['News']['id']."')",'escape'=>false,'title'=>'Remove'))."</li>";
					$i++;
				endforeach;*/
				?>
			
            <?php $i=0; foreach ($products as $article): ?>
                <li>
                [<?= h($article->topseq) ?>]&nbsp; &nbsp;<?= h($article->title) ?>
                <?= $this->Form->control('Products.'.$i.'.id',['type'=>'hidden','value'=>$article->id]); ?>
                </li>
            <?php $i++; endforeach; ?>
            </ul> 
            <?= $this->Form->button(__('Change'))?>
    	<?= $this->Form->end() ?>
        </div>
    </div>
</div>
