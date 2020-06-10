<?php 
 $array=array(
     array("0"=>2,"1"=>5,"2"=>9,"3"=>3,"4"=>20),
     array("0"=>4,"1"=>8,"2"=>10,"3"=>2,"4"=>30)
    );
 $max = $array[0][0];
 foreach($array as $key1=>$value1 ){
     foreach($array[$key1] as $key2=>$value2){
     if($max < $array[$key1][$key2]){
         $max =$array[$key1][$key2];
     }
 }
 } print_r($array);
 echo "<br>Vị trí phần tử :" .$key1 .",". $key2 ."<br>Giá trị lớn nhất phần tử :" .$max;


?>