<?php 
$array = array(5,3,2,1,6,8,9,7);
$min = $array[0];
foreach ($array as $key => $value) {
    if( $min > $array[$key]){
        $min = $array[$key] ;
    }
} print_r($array); 
 echo "<br>Giá trị nhỏ nhất là: " .$min;
?>
