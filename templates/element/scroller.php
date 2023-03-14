<?php 
use Cake\I18n\Time;

if(!empty($products_latest)){
	$products_latest = json_decode($products_latest,true);
	$i=1;
	?>
	<div class="onoffswitch3 mb-4">
	    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
	    <label class="onoffswitch3-label" for="myonoffswitch3">
	        <span class="onoffswitch3-inner">
	            <span class="onoffswitch3-active">
	                <marquee class="scroll-text"  onmouseover="this.stop();" onmouseout="this.start();"><?php
		foreach ($products_latest as $product) {
			?>
			<a class="mr-2" href="<?= $head_url ?>news/<?= $product['slug'] ?>">
				&rang; <?= $product['title'] ?>
				</a>
			<?php 
					
		            ?>
	                
			<?php
			$i++;
		}
		?></marquee>
	                <span class="onoffswitch3-switch">সর্বশেষ বার্তা</span>

	            </span>
	        </span>
	    </label>
	    
	</div>
	
	<?php
}
?>
           
