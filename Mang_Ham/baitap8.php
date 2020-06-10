
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Nhập vào một chữ cái thường</label>
        <input type="text" name="Text" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html> 
<?php 
if(isset($_POST['Text'])){
    $Text = $_POST['Text'];
$string_ban_dau = "vietjack team";
$count = '0' ;
 for ($i = '0' ; $i < strlen($string_ban_dau) ; $i++){
    if(substr($string_ban_dau,$i,1)== $Text){
        $count++;
    }
 }
 echo "Có ".$count." ký tự ".$Text." trong chuỗi "."'".$string_ban_dau."'";
}    
?>  

