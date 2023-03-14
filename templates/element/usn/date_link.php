<?php
//$arr_number = array (' '=>" ",'-'=>"/",':'=>":",0=>"&#2534;",1 =>"&#2535;",2 =>"&#2536;",3 =>"&#2537;",4 =>"&#2538;",5 =>"&#2539;",6 =>"&#2540;",7 =>"&#2541;",8 =>"&#2542;",9 =>"&#2543;");
$dt = '';$date_time = str_split(date('d-m-Y H:i',strtotime($created)));
foreach ($date_time as $key => $value){
    $dt .= $arr_numbers[$value];
}
?>
<a href="<?= $siteoptions['web_url'].'/archive/'.date('Y-m-d',strtotime($created)) ?>"><?= $dt?></a>