<html>
<head>
    <title>Menghitung Selisih Dua Waktu</title>
</head>
<body>
<h1>Menghitung Selisih Dua Waktu</h1>

<?php
$jam1 = $_POST['jam1'];       // baca jam dari waktu 1
$menit1 = $_POST['menit1'];   // baca menit dari waktu 1
$detik1 = $_POST['detik1'];   // baca detik dari waktu 1

$jam2 = $_POST['jam2'];       // baca jam dari waktu 2
$menit2 = $_POST['menit2'];   // baca menit dari waktu 2
$detik2 = $_POST['detik2'];   // baca detik dari waktu 2

// Menghitung total detik masing-masing waktu
$totalDetik1 = ($jam1 * 3600) + ($menit1 * 60) + $detik1;
$totalDetik2 = ($jam2 * 3600) + ($menit2 * 60) + $detik2;

// Hitung selisih total detik dari kedua waktu
$selisih = $totalDetik1 - $totalDetik2;

// Pastikan hasilnya positif (tanpa tanda minus)
$selisih = abs($selisih);

// Konversi kembali ke jam, menit, detik
$jamSelisih = floor($selisih / 3600);
$sisa = $selisih % 3600;
$menitSelisih = floor($sisa / 60);
$detikSelisih = $sisa % 60;

echo "<p>Selisih dari kedua waktu adalah: <b>$jamSelisih jam $menitSelisih menit $detikSelisih detik</b></p>";
?>

</body>
</html>
