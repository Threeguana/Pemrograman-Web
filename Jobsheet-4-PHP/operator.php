<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

//soal 3.1
$a = 10;
$b = 5;

echo "a = {$a} <br>";
echo "b = {$b} <br><br>";

echo "Hasil Penjumlahan (a + b) = {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) = {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b) = {$hasilKali} <br>";
echo "Hasil Pembagian (a / b) = {$hasilBagi} <br>";
echo "Hasil Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<br>";

// soal 3.2
$a = 10;
$b = 5;

echo "Apakah a sama dengan b? : $hasilSama <br>";
echo "Apakah a tidak sama dengan b? : $hasilTidakSama <br>";
echo "Apakah a lebih kecil dari b? : $hasilLebihKecil <br>";
echo "Apakah a lebih besar dari b? : $hasilLebihBesar <br>";
echo "Apakah a lebih kecil atau sama dengan b? : $hasilLebihKecilSama <br>";
echo "Apakah a lebih besar atau sama dengan b? : $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "<br>";

//soal 3.3
$a = 10;
$b = 5;

echo "Apakah a AND b? : " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Apakah a OR b? : " . ($hasilOr ? "true" : "false") . "<br>";
echo "NOT a : " . ($hasilNotA ? "true" : "false") . "<br>";
echo "NOT b : " . ($hasilNotB ? "true" : "false") . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";

//soal 3.4
$a = 10;
$b = 5;

$a += $b; // sama dengan $a = $a + $b
echo "Setelah a += b, nilai a = {$a} <br>";

$a -= $b; // sama dengan $a = $a - $b
echo "Setelah a -= b, nilai a = {$a} <br>";

$a *= $b; // sama dengan $a = $a * $b
echo "Setelah a *= b, nilai a = {$a} <br>";

$a /= $b; // sama dengan $a = $a / $b
echo "Setelah a /= b, nilai a = {$a} <br>";

$a %= $b; // sama dengan $a = $a % $b
echo "Setelah a %= b, nilai a = {$a} <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? : " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Apakah a tidak identik dengan b? : " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
echo "<br>";

$totKursi = 45;
$terisi = 28;
$kursiKosong = (45-28)/45 * 100;

echo"Total Kursi Resto = $totKursi<br>";
echo"Kursi yang terisi pada suatu malam = $terisi<br>";
echo"Persen Kursi yang masih kosong $kursiKosong%";
?>
