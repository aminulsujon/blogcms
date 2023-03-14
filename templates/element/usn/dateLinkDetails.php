<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="12px" height="12px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
    <g>
        <path d="M8,0C3.589,0,0,3.589,0,8s3.589,8,8,8s8-3.589,8-8S12.411,0,8,0z M8,14c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
            S11.309,14,8,14z"/>
        <path d="M7,7H4v2h4c0.552,0,1-0.448,1-1V3H7V7z"/>
    </g>
</svg>
<?php
if(!empty($pDate)){
    echo $pDate;
}else{
    $en = array(1,2,3,4,5,6,7,8,9,0,22);
    $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','২2');
    $en_m = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
    $bn_m = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    $en_ap= array('AM','PM');
    $bn_ap = array('এএম','পিএম');
    $publisth_date = date('d M Y, h:i A',strtotime($created));
    $publisth_date = str_replace($en,$bn,$publisth_date);
    $publisth_date = str_replace($en_m,$bn_m,$publisth_date);
    $publisth_date = str_replace($en_ap,$bn_ap,$publisth_date);
    echo $publisth_date;
}
?>
