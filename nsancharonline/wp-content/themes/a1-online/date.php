<?php
$post_date = get_the_date( 'Y-m-d' );
$date_conversion = 'eng_to_nep';
echo "";
if(function_exists('_Nyasro_NepaliDateConverter')){
    _Nyasro_NepaliDateConverter( $post_date, $date_conversion);

}else {
    default_meta();
}
?>

