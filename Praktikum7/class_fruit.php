<?php

class Fruit {
    // Membuat Property
    public $name;
    public $color;
    public $flavor;

    // Membuat Method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Nama buah = " . $this->name . "<br>Warna buah = " . $this->color . "<br>Rasa = " . $this->flavor;
    }
}

// Membuat Objek / Instance
$fruit1 = new Fruit();
$fruit1->name = "Apel";
$fruit1->color = "Merah";
$fruit1->flavor = "Manis";

$fruit2 = new Fruit();
$fruit2->name = "Pisang";
$fruit2->color = "Kuning";
$fruit2->flavor = "Manis";

$fruit3 = new Fruit();
$fruit3->name = "Semangka";
$fruit3->color = "Hijau";
$fruit3 ->flavor = "Manis";
echo "Nama buah = " . $fruit1->getName();
echo "<br>";
echo  $fruit1->getInfo();
echo "<hr>";
echo $fruit2->getInfo();
echo "<hr>";
echo $fruit3->getInfo();
