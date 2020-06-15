<?php
require_once('Shapes/Circle.php');
require_once('Resizeable.php');
class resizeCircle extends Circle implements Resizeable{
    function __construct($name,$radius)
    {
        parent::__construct($name,$radius);
    }
    public function resize($scale){
        return round($this->calculateArea()+$this->calculateArea()*$scale*0.01,2);
    }
}
?>