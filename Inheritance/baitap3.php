<?php 
class Point {
    protected $X;
    protected $Y;

    function getX(){
        return $this->X;
    }

    function setX($newX=0){
        $this->X=$newX;
    }
    function getY(){
        return $this->Y;
    }

    function setY($newY=0){
        $this->Y=$newY;
    }
    function getXY(){
        return $this->X.$this->Y;
    }

    function setXY($newX=0,$newY=0){
        $this->X=$newX;
        $this->Y=$newY;
    }
    function toString(){
        echo $this->X.$this->Y;
    }
}
?>

<?php
class MovablePoint extends Point{
    protected $Xspeed;
    protected $Yspeed;

    function __construct($X,$Y,$Xspeed,$Yspeed)
    {
        $this->X=$X;
        $this->Y=$Y;
        $this->Xspeed=$Xspeed;
        $this->Yspeed=$Yspeed;
    }

    function getXspeed(){
        return $this->Xspeed;
    }
    
    function setXspeed($newXspeed=0){
         $this->Xspeed=$newXspeed;
    }

    function getYspeed(){
        return $this->Yspeed;
    }

    function setYspeed($newYspeed=0){
        $this->Yspeed=$newYspeed;
    }

    function getSpeed(){
        return $array=[$this->X,$this->Y];  
    }

    function setSpeed($newXspeed=0,$newYspeed=0){
        $this->Xspeed = $newXspeed;
        $this->Yspeed = $newYspeed;
    }

    function toString(){
        echo 'X = ' .$this->X.', Y ='.$this->Y.'<br> Speed :'.' Xspeed ='.$this->Xspeed.', Yspeed ='.$this->Yspeed;
    }

    function move(){
        $this->X +=$this->Xspeed;
        $this->Y +=$this->Yspeed;
        return $this;
    }
}
$movablePoint = new MovablePoint(3,2,6,8);
$movablePoint->toString();
?>