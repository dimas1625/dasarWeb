<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "<h3>Numeric Variables</h3>";
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
var_dump($e);

echo "<hr>"; 

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "<h3>Grades and Average</h3>";
echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
var_dump($rataRata);

echo "<hr>"; // Horizontal line to separate sections

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "<h3>Boolean Values</h3>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<hr>"; // Horizontal line to separate sections

$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
$namaLengkap = "{$namaDepan} {$namaBelakang}";

echo "<h3>String Variables</h3>";
echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';
echo "Nama Lengkap: {$namaLengkap} <br>";

echo "<hr>"; // Horizontal line to separate sections

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];

echo "<h3>Array Values</h3>";
echo "<pre>"; // Use <pre> to preserve formatting
print_r($listMahasiswa);
echo "</pre>";
?>