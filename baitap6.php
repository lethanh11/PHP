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
    $text='So nguyen to be hon 100 la: ';
    for ($i = 0; $i < 100; $i++) {
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
    <p><?= $text?></p>
</body>
</html>