<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POSt">
    <label>Nhập Số Nguyên</label>
    <input type="text" name="Interge">
    <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 
 if(isset($_POST['Interge'])){
     $Interge = $_POST['Interge'];
     $array = [];
     
     for($i = 0 ; $i<$Interge;$i++){
         array_push($array,rand(1,100));
     }
     $min=$array[0];
     foreach($array as $key => $value){
         if($min > $array[$key]){
            $min = $array[$key];
            $index=$key;
         }
     }
     print_r($array);
     echo "<br>Vị Trí phần tử :". $index ."<br> Giá trị nhỏ nhất là : " . $min;
 }
?>