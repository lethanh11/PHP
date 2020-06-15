<?php
require_once('Shapes/Square.php');
require_once('Resizeable.php');
class resizeSquare extends Square implements Resizeable{
    function __construct($name,$width)
    {
        parent::__construct($name,$width);
    }
    public function resize($scale){
        return round($this->calculateArea()+$this->calculateArea()*$scale*0.01,2);
    }
}
?>