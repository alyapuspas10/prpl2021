<?php

//define basic shape
interface Shape{
    public function area();
    public function perimeter();
}

interface Shape3D extends Shape{
    public function volume();
}

class Rectangle implements Shape{
    private $height;
    private $width;

    public function __construct($height, $width){
        $this->height = $height;
        $this->width = $width;
    }
    public function height(){
        return $this->height;
    }
    public function width(){
        return $this->width;
    }
    public function area(){
        return $this->height * $this->width;
    }
    public function perimeter(){
        return 2 * ($this->height + $this->width);
    }
}

class Ball implements Shape3D
{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function radius(){
        return $this->radius;
    }
    public function area(){
        return 4 * M_PI * pow($this->radius, 2);
    }
    public function perimeter(){
        return 2 * M_PI * $this->radius;
    }
    public function volume(){
        return (4/3 * M_PI) * pow($this->radius, 3);
    }
}

class Cone implements Shape3D
{
    public $radius;
    public $height;

    public function __construct($radius, $height){
        $this->radius = $radius;
        $this->height = $height;
    }
    public function radius(){
        return $this->radius;
    }
    public function height(){
        return $this->height;
    }
    public function area(){
        $r = $this->radius;
        $h = $this->height;
        M_PI * $r * ($r + sqrt(($h*$h)+($r*$r)));
    }
    public function perimeter(){
        return 2 * M_PI * $this->radius;
    }
    public function volume(){
        return (M_PI  * pow($this->radius, 2) * $this->height) / 3;
    }
}

class Cube implements Shape3D
{
    private $side;

    public function __construct($side){
        $this->side = $side;
    }
    public function side(){
        return $this->side;
    }
    public function area(){
        return 6 * pow($this->side, 2);
    }
    public function perimeter(){
        return 12 * $this->side;
    }
    public function volume(){
        return pow($this->side, 3);
    }
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function radius(){
        return $this->radius;
    }
    public function area(){
        return M_PI * pow($this->radius, 2);
    }
    public function perimeter(){
        return 2 * M_PI * $this->radius;
    }
}

$rec = new Rectangle(5, 10);
$ball = new Ball(10);
$cone = new Cone(5, 10);
$cube = new Cube(2);
$circle = new Circle(21);
$shapes =  array($rec, $ball, $cone, $cube, $circle);

echo 'ALYA PUSPA SARI <br/>';
echo '1900018352/INT<br/>';
echo '==========================<br/>';
echo 'Area of rectangle : ' . $shapes[0]->area() . '<br />';
echo 'Length            : ' . $shapes[0]->height() . '<br />';
echo 'Width             : ' . $shapes[0]->width() . '<br />';
echo '<br>';
echo 'Volume of ball    : ' . $shapes[1]->volume() . '<br />';
echo 'Radius            : ' . $shapes[1]->radius() . '<br />';
echo '<br>';
echo 'Volume of Cone    : ' . $shapes[2]->volume() . '<br />';
echo 'Radius            : ' . $shapes[2]->radius() . '<br />';
echo 'Height            : ' . $shapes[2]->height() . '<br />';
echo '<br>';
echo 'Volume of Cube    : ' . $shapes[3]->volume() . '<br />';
echo 'Side             : ' . $shapes[3]->side() . '<br />';
echo '<br>';
echo 'Circumference     : ' . $shapes[4]->perimeter() . '<br />';
echo 'Radius            : ' . $shapes[4]->radius() . '<br />';
echo '<br>';

?>