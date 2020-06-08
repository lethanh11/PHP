<?php
    function isPrime($num){
        if($num < 2) return false;
        else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
    }
    if(isset($_GET['nums'])){
        $nums = $_GET['nums'];
        $text="So nguyen to be hon $nums la: ";
    }
    for ($i = 0; $i < $nums; $i++) {
        if (isPrime($i)) {
            $text .=$i . " ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
    <form action="" method="get">
        <fieldset style='display: inline-block;'>
            <legend>PRIME</legend>
            <label for="">Số lượng số nguyên tố cần hiện</label>
            <input type="text" name='nums'>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <?= $text?>
    </div>
</body>
</html>