<?php
require_once('resizeCircle.php');
require_once('resizeSquare.php');
require_once('resizeRectangle.php');
$arrShape = [new resizeCircle('Circle1',10),
            new resizeSquare('Square1',15),
            new resizeRectangle('Rectangle1',10,15)];
$scale = rand(1,100);
foreach ($arrShape as $shape){
   echo '<br>'.$shape->name.'co dien tich truoc resize la: '.$shape->calculateArea();
}
foreach ($arrShape as $shape){
echo '<br>'.$shape->name.'co dien tich sau resize la: '.$shape->resize($scale);
}