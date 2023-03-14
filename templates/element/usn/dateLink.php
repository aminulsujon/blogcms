<?php
// $dt = '';$date_time = str_split(date('d-m-Y H:i',strtotime($created)));
// foreach ($date_time as $key => $value){$dt .= $arr_numbers[$value];}
?>
<!-- <a href="javascript:void(0)"></a> -->

<?php 
use Cake\I18n\Time;
$now = Time::parse($created);
?>
<a class="hidden" href="javascript:void(0);">
<?= $now->timeAgoInWords([
    'accuracy' => ['month' => 'month'],
    'end' => '1 year'
]);?></a>