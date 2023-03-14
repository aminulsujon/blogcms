<?php
$dt = '';$date_time = str_split(date('d-m-Y H:i',strtotime($created)));
foreach ($date_time as $key => $value){$dt .= $arr_numbers[$value];}
?>
<?php //$dt?>
