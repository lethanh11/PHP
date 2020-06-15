<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Shape.php');

class Rectangle extends Shape
{
    public $width;
    public $height;
    public $color = 'red';

    public function __construct($name, $width, $height)
    {
        parent::__construct($name,false);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}