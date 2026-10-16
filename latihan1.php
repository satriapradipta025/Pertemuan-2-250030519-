<?php
echo "Program PHP menentukan grade <br>";
$nilai = 85;
if ($nilai >= 90) {
 $grade = "A";
} elseif ($nilai >= 80) {
 $grade = "B";
} elseif ($nilai >= 70) {
 $grade = "C";
} elseif ($nilai >= 60) {
 $grade = "D";
} else {
 $grade = "F";
}

echo "Nilai: $nilai <br>";
echo "Grade: $grade <br><br><br>";
?>


<?php
 echo "Program menampilkan angka 1-10 dengan ganjil genap <br>";
 for ($i = 1; $i <=10; $i++) {
  if ($i % 2 == 0){
    echo "$i genap <br>";
  } else {
    echo "$i ganjil <br>";
  }
 }
?>


<?php
echo "<br><br><br>Program array berisi daftar nama mahasiswa <br>";
$mahasiswa = ["Andi", "Budi", "Citra", "Dika", "Eka"];
$no = 1;

foreach ($mahasiswa as $nama) {
    echo "$no. $nama <br>";
    $no++;
}
?>


<?php
echo "<br><br><br>Membuat fungsi hitung luas lingkaran <br>";

function hitungLuasLingkaran($jari) {
    return 3.14 * $jari * $jari;
}

$jari = 7;
$luas = hitungLuasLingkaran($jari);  

echo "Luas lingkaran dengan jari-jari $jari adalah $luas";
?>