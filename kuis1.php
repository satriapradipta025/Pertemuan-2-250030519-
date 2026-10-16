<?php
echo "Kuis soal 1 <br>";
$angka = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

foreach ($angka as $no) {
    if ($no % 3 == 0) {
        echo "$no <br>";
    }
}
?>

<?php
echo "<br><br>Kuis soal 2 <br>";

function hitungnilaiakhir($tugas, $uts, $uas) {
    $nilaiakhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas + 0.40);
    $status = ($nilaiakhir >= 70) ? "Lulus" : "Tidak Lulus";

    echo "Nilai akhir: $nilaiakhir <br>";
    echo "Status: $status";
}

hitungnilaiakhir(75, 60, 50);
?>