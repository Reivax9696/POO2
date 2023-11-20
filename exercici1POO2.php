<?php

abstract class Animal {
    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    abstract public function makeSound();
}

class Gos extends Animal {
    public function makeSound() {
        return "Bup bup!";
    }
}

class Gat extends Animal {
    public function makeSound() {
        return "Miau!";
    }
}

$Gos = new Gos("Blanca");
$Gat = new Gat("Garfield");

echo $Gos->nom . ": " . $Gos->makeSound() . "<br>";
echo $Gat->nom . ": " . $Gat->makeSound() . "<br>";

?>