<?php 
class Circle {
    public $radius;
    public $color;
 
    public function __construct($radius,$color="red"){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}
?>
<?php 
class Cylinder extends Circle {
    public $height;

    public function __construct($radius,$height,$color="red"){
        parent::__construct($radius,$color="red");
        $this->height=$height;
    }

    public function cylindricalVolume(){
        return "Thể tích Hình Trụ = " .round($this->height*$this->calculateArea(),2)."<br> Color: " . $this->color;
    }
}
$cylinder = new Cylinder(5,3);
echo $cylinder->cylindricalVolume();
?>
