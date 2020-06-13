<?php
Class Poin2D {
    public $X;
    public $Y;

    function getX(){
        return $this->X;
    }

    function setX($newX){
        $this->X=$newX;
        
    }

    function getY(){
        return $this->Y;
    }
    
    function setY($newY){
        $this->X=$newY;
    }

    function setXY($newX=0,$newY=0){
        $this->X = $newX;
        $this->Y = $newY;
    }
    function getXY(){
        return $array=array($this->X,$this->Y);
    }
    
    function toString(){
        return $this->X.$this->Y;
    }
}
?>

<?php 
class Poin3D extends Poin2D {
    public $Z;


    function getZ(){
        return $this->Z;
    }

    function setZ($newZ){
        $this->Z=$newZ;
        
    }

    function getXYZ(){
        return $array=[$this->X,$this->Y,$this->Z];
    }

    function setXYZ($newX=0,$newY=0,$newZ=0){
        $this->X=$newX;
        $this->Y=$newY;
        $this->Z=$newZ;
    }

    function toString(){
         echo ''.$this->X.$this->Y.$this->Z;
    }

}
$poin3d =new Poin3D();
$poin3d->setXYZ(3,4,5);
print_r($poin3d->getXYZ());
?>