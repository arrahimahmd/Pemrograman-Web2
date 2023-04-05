<?php

class Balok {
    // Membuat Property
    public $panjang;
    public $lebar;
    public $tinggi;

    // Membuat Method
    public function getLuas(){
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }
    public function getKeliling(){
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }
    public function __construct($p, $l, $t){
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    // VOLUME
    public function volume(){
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

// Membuat Objek
$balok1 = new Balok(5, 10, 15);
echo "Volume Balok 1 = " . $balok1->volume();
echo "<br>";
echo "Keliling Balok 1 = " . $balok1->getKeliling();
echo "<br>";
echo "Luas Balok 1 = " . $balok1->getLuas();
echo "<hr>";
$balok2 = new Balok(15, 20, 25);
echo "Volume Balok 2 = " . $balok2->volume();
echo "<br>";
echo "Keliling Balok 2 = " . $balok2->getKeliling();
echo "<br>";
echo "Luas Balok 2 = " . $balok2->getLuas();
echo "<hr>";