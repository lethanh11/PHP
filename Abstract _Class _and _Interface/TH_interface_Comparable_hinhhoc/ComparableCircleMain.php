<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 9);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 1);

$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;
?>