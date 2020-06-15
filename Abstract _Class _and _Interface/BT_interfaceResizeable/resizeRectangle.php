<?php
require_once('Shapes/Rectangle.php');
require_once('Resizeable.php');
class resizeRectangle extends Rectangle implements Resizeable{
    function __construct($name,$width,$height)
    {
        parent::__construct($name,$width,$height);
    }
    public function resize($scale){
        return round($this->calculateArea()+$this->calculateArea()*$scale*0.01,2);
    }
}
?>