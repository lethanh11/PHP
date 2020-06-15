<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
require_once('Colorable.php');
include_once ('Shapes/Rectangle.php');

class Square extends Rectangle implements Colorable
{   
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
        $this->color=true;
    }
    public function howToColor(){
        return 'Color all four sides..';
    }
}