<!DOCTYPE html>
<html lang="en">
​
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
​
<body>
    <form method="post" action="baitap1.php">
        <input type="text" name="number"><input type="submit" value="Đọc số">
    </form>
    <?php
    function dv($num){
        $checkNumber = $num%10;
        switch($checkNumber){
            case '1': if ($num==1) {return ' một ';} else if(($num>100)&&($num%100==1)) {return " lẻ một ";} else if ($num>10) {return " mốt ";} break;
            case '2': if (($num==2)||($checkNumber==2)) {return ' hai ';} else if(($num>100)&&($num%100==2)) {return " lẻ hai ";}; break;
            case '3': if (($num==3)||($checkNumber==3)) {return ' ba ';} else if(($num>100)&&($num%100==3)) {return " lẻ ba ";}; break;
            case '4': if (($num==4)||($checkNumber==4)) {return ' bốn ';} else if(($num>100)&&($num%100==4)) {return " lẻ bốn ";}; break;
            case '5': if($num>10) {return " lăm ";} else {return " năm ";} break;
            case '6': if (($num==6)||($checkNumber==6)) {return ' sáu ';} else if(($num>100)&&($num%100==6)) {return " lẻ sáu ";}; break;
            case '7': if (($num==7)||($checkNumber==7)) {return ' bảy ';} else if(($num>100)&&($num%100==7)) {return " lẻ bảy ";}; break;
            case '8': if (($num==8)||($checkNumber==8)) {return ' tám ';} else if(($num>100)&&($num%100==8)) {return " lẻ tám ";}; break;
            case '9': if (($num==9)||($checkNumber==9)) {return ' chín ';} else if(($num>100)&&($num%100==9)) {return " lẻ chín ";}; break;
            case '0': if($num == 0 ){return 'không';} else if($num%10===0) {return;} else {return "không";} break;
        }
    }
    function chuc($num){
        
        if ($num>100){
            $checkNumber = floor(($num - floor($num/100)*100)/10);
        }else {
            $checkNumber = floor($num/10);
        }
        switch($checkNumber){
            case '1': return " mười "; break;
            case '2': return " hai mươi "; break;
            case '3': return " ba mươi"; break;
            case '4': return " bốn mươi"; break;
            case '5': return " năm mươi"; break;
            case '6': return " sáu mươi "; break;
            case '7': return " bảy mươi "; break;
            case '8': return " tám  mươi"; break;
            case '9': return " chín mươi "; break;
        }
    }
    function tram($num){
        $checkNumber = floor($num/100);
        switch($checkNumber){
            case '1': return " một trăm "; break;
            case '2': return " hai trăm "; break;
            case '3': return " ba trăm"; break;
            case '4': return " bốn trăm"; break;
            case '5': return " năm trăm"; break;
            case '6': return " sáu trăm "; break;
            case '7': return " bảy trăm "; break;
            case '8': return " tám  trăm"; break;
            case '9': return " chín trăm "; break;
        }
    }
   
    if (isset($_POST['number'])){
        $number = $_POST['number'];
        echo tram($number).chuc($number).dv($number);
    }
    ?>
</body>
​
</html>