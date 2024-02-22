<?php


abstract class Shape {
    public $alcada;
    public $amplada;
    public $radi;


    public function __construct($alcada, $amplada){
        $this->alcada = $alcada;
        $this->amplada = $amplada;
    }

    public abstract function calcularArea();
}


Class Rectangle extends Shape {

    function calcularArea(){
        return $this->alcada*$this->amplada;
    }

}


Class Triangle extends Shape {

    public function calcularArea(){
        return $this->alcada * $this->amplada / 2;
    
}
}

class Cercle extends Shape {
    public $radi;

    public function __construct($radi){
        $this->radi = $radi;
    }

    public function calcularArea(){
        return M_PI * $this->radi * $this->radi;
    }
}


$triangle1 = new Triangle (10, 15);
$rectangle1 = new Rectangle (10, 15);
$cercle1 = new cercle(5);


echo "L'area del triangle es " . $triangle1->calcularArea() . "<br>";
echo "L'area del rectangle es " . $rectangle1->calcularArea() . "<br>";
echo "L'area del cercle es " . $cercle1->calcularArea();

//hello? is this thing on?





















?>