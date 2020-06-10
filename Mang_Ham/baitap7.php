<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nhập Số Cần Xóa</label>
        <input type="text" name='Delete'>
        <input type="submit" name="Submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["Delete"])){
    $X = $_POST['Delete'];
 $array = array(10,4,6,7,8,6,0,0,0,0);
 print_r($array);
 foreach($array as $key => $value){
     if($X == $value){
         $array[$key] = 8;
     }
 } echo '<br> New';
 print_r($array);
} 
?>


