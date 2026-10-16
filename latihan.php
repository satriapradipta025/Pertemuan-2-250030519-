<?php
echo "Program biodata mahasiswa <br>";
$nama = "Satria Pradipta";
$nim = 250030519;
$kd_jurusan = "SI";
$angkatan = 2025;
$umur = 19;
$gender = "Laki-Laki";
$hobi = "Gambar";

echo "Nama Mahasiswa : $nama" . "<br>";
echo "NIM : $nim" . "<br>";
echo "Kode Jurusan : $kd_jurusan" . "<br>";
echo "Angkatan : $angkatan" . "<br>";
echo "Umur : $umur" . "<br>";
echo "Gender : $gender" . "<br>";
echo "Hobi : $hobi" . "<br><br><br>";
?>

<?php
echo "Program penjumlahan dua variabel <br>";
$x = 15;
$y = 4;

echo "X = $x" . "<br>";
echo "Y = $y" . "<br><br>";

echo "Penjumlahan (X + Y) = " . ($x + $y) . "<br>";
echo "Pengurangan (X - Y) = " . ($x - $y) . "<br>";
echo "Perkalian (X * Y) = " . ($x * $y) . "<br>";
echo "Pembagian (X / Y) = " . ($x / $y) . "<br>";
echo "Modulus (X % Y) = " . ($x % $y) . "<br>";
echo "Pangkat (X ** Y) = " . ($x ** $y) . "<br><br><br>";
?>

<?php
echo "Program perbandingan dua variabel <br>";
$x = 10;
$y = "10 <br>";

echo "apakah $x sama dengan $y? " . ($x == $y ? "true" : "false") . "<br>";
echo "apakah $x identik dengan $y? " . ($x === $y ? "true" : "false") . "<br>";
echo "apakah $x lebih besar dari $y? " . ($x > $y ? "true" : "false") . "<br>";
echo "apakah $x lebih kecil dari $y? " . ($x < $y ? "true" : "false") . "<br>";
?>