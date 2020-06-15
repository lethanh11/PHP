<?php 
include "CircleComparator.php";

$circleOne = new Circle(5);
$circleTwo = new Circle(4);
$circleComparator = new CircleComparator();
echo($circleComparator->compare($circleOne, $circleTwo));
?>