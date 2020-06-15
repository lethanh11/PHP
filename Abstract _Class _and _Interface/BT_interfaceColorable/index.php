<?php
require_once('Square.php');
require_once('Shapes/Cylinder.php');
// require_once('Shape/Circle.php');
// require_once('Shape/Rectangle.php');
$arrShape = [new Circle('circle1',10),
            new Rectangle('rectangle1',10,5),
            new Square('square1',9),
            new Cylinder('cylinder1',7,10)];
foreach($arrShape as $shape){
$text =  '<br>'.$shape->name.' co dien tich la: '.$shape->calculateArea(). ' ';   
if($shape->color){ $text.='-'.$shape->howToColor();}
echo $text;
} 
?>