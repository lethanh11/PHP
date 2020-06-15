<?php

class Circle 
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}