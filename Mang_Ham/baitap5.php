<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="baitap5.php" method="POST">
        <label>Mảng 1</label>
        <input type="text" name="One">
        <label>Mảng 2</label>
        <input type="text" name="Two">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
if (isset($_POST['One'])) {
    $One = $_POST['One'];
    $Two = $_POST['Two'];
    $arrayOne = [];
    $arrayTwo = [];
    $arrayThree = [];
    
    for ($i = 0; $i < $One; $i++) {
        array_push($arrayOne, rand(1, 100));
    }
    for ($i = 0; $i < $Two; $i++) {
        array_push($arrayTwo, rand(1, 100));
    }
    $arrayThree=$arrayOne;
    for($i = 0 ; $i < $Two ;$i++){
    array_push($arrayThree,$arrayTwo[$i]);
    }
    print_r($arrayThree);
}
 ?>