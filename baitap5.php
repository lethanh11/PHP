<?php
if(isset($_GET['img'])) {$select = $_GET['img'];
    $text= menu($select);
}
function rectangle(){
    $text="";
    for($row=0;$row<3;$row++){
        for($col=0;$col<7;$col++){
            $text.='*';
        }
        $text .='<br>';
    }
    return $text;
}
function trianglebl(){
    $text="";
    for($row=0;$row<5;$row++){
        for($col=0;$col<=$row;$col++){
            $text.='*';
        }
        $text .='<br>';
    }
    return $text;
}
function triangletl(){
    $text="";
    for($row=0;$row<5;$row++){
        for($col=$row;$col<5;$col++){
            $text.='*';
        }
        $text .='<br>';
    }
    return $text;
}
function triangletr(){
    $text="";
    for($row=0;$row<5;$row++){
        for($col=0;$col<$row;$col++){
            $text.='&nbsp&nbsp';
        }
        for($col=$row;$col<5;$col++){
            $text.='*';
        }
        $text .='<br>';
    }
    return $text;
}
function trianglebr(){
    $text="";
    for($row=0;$row<5;$row++){
        for($col=$row;$col<4;$col++){
            $text.='&nbsp&nbsp';
        }
        for($col=0;$col<=$row;$col++){
            $text.='*';
        }
        $text .='<br>';
    }
    return $text;
}
function triangle(){
    $text="";
    for($row=0;$row<5;$row++){
        for($col=0;$col<5-$row;$col++){
            $text.='&nbsp*&nbsp';
        }
        $text .='<br>';
    }
    return $text;
}
function menu($select){
    switch ($select){
        case 'rec':
        $text = rectangle();
        break;
        case 'tl':
        $text = triangletl();
        break;
        case 'tr':
        $text = triangletr();
        break;
        case 'bl':
        $text = trianglebl();
        break;
        case 'br':
        $text = trianglebr();
        break;
        case 'tri':
        $text = triangle();
        break;
        case 'exit':
        $text = 'Bye_bye';
        break;
    }
    return $text;
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
    <form action="" method="get" style="display: inline-block;text-align: left;">
        <fieldset>
            <legend>MENU</legend>
            <ol>
                <li><label for=""><input type="radio" name="img" value="rec" id="">Print the rectangle</label></li>
                <li><label for=""><input type="radio" name="img" value="tl" id="">Print the square triangle top-left</label></li>
                <li><label for=""><input type="radio" name="img" value="tr" id="">Print the square triangle top-right</label></li>
                <li><label for=""><input type="radio" name="img" value="bl" id="">Print the square triangle botton-left</label></li>
                <li><label for=""><input type="radio" name="img" value="br" id="">Print the square triangle botton-right</label></li>
                <li><label for=""><input type="radio" name="img" value="tri" id="">Print isosceles trianglet</label></li>
                <li><label for=""><input type="radio" name="img" value="exit" id="">Exit</label></li>
            </ol>
                <input type="submit" value="Submit">
        </fieldset>
    </form>
    </div>
    <p style="margin-left: 45%;"><?php if(isset($text)) echo $text;?></p>
</body>
</html>
