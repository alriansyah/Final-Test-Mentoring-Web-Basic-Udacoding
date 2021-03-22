<?php
$nilai = $_POST['nilai'];

if ($nilai >= 100) {
    $hasil = "Nilai tidak valid.";
} elseif ($nilai >= 90 and $nilai <= 100) {
    $hasil = "Terpuji";
} elseif ($nilai >= 80) {
    $hasil = "Sangat Memuaskan";
} elseif ($nilai >= 60) {
    $hasil = "Memuaskan";
} elseif ($nilai >= 0) {
    $hasil = "Tidak Lulus";
}

header("location:kalkulator_nilai.php?hasil=$hasil");
