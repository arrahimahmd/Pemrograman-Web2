<?php
class BMI {
    // Membuat Property
    public $berat;
    public $tinggi;

    // Membuat Method
    public function hasilBMI(){
        return ($this->berat / ($this->tinggi * $this->tinggi))*10000;
    }
    public function statusBMI() {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kurang";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Ideal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Gemuk";
        } else {
            return "Obesitas";
        }
    }
    public function __construct($bb, $tb){
        $this->berat = $bb;
        $this->tinggi = $tb;
    } 
}