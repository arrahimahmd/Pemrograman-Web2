<?php

class Lingkaran {
    // Membuat Property
    public $jari_jari;
    public const PHI = 3.14;

    // Membuat Method
    public function __construct($r){
        $this->jari_jari = $r;
    }
    // LUAS
    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    // KELILING
    public function keliling(){
        return 2*self::PHI * $this->jari_jari;
    }
}

// Membuat Objek
$lingkaran1 = new Lingkaran(10);
echo "Luas Lingkaran1 = " . $lingkaran1->luas();
echo "<br>";
echo "Keliling Lingkaran1 = " . $lingkaran1->keliling();
echo "<hr>";
$lingkaran2 = new Lingkaran(15);
echo "Luas Lingkaran2 = " . $lingkaran2->luas();
echo "<br>";
echo "Keliling Lingkaran2 = " . $lingkaran2->keliling();