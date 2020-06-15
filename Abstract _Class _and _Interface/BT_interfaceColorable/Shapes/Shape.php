<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */
class Shape
{   
    public $name;
    public $color;
    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}