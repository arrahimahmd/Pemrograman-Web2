<?php 
// ini sebuah komentar
/* ini sebuah komentar
    blablabla
*/

# ini sebuah komentar juga

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Arrahima Hamdia <br>");
// var_dump("STT Nurul Fikri");
// var_dump(123);

// membuat variabel user
$nama = "Arrahima Hamdia";
$umur = 18;
$berat = 70.5;
$mahasiswa = true;

// echo "Hallo nama saya $nama ";
// echo "Umurku $umur th ";
// echo "dan memiliki berat badan $berat kg";

// // membuat variabel sistem
// echo "<br> Dokumen  root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br> Nama file " . $_SERVER['PHP_SELF'];

// membuat variabel konstanta
define('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;
// echo "<br> Luas lingkaran dengan jari-jari $jari = $luas";
// echo "<br> Keliling Lingkaran jari-jari $jari = $keliling";

// membuat array
$programs = ["Php", "Javascript", "HTML", "CSS"];
// echo $programs[2];
echo "jumlah data sebanyak " . count($programs);


?>