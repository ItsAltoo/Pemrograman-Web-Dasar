<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
<h1>Menghitung Komisi Salesman</h1>

<?php
$nilaiJual = $_POST['penjualan'];     // membaca nilai penjualan
$prosenKomisi = $_POST['komisi'];     // membaca nilai persentase komisi

$komisi = $nilaiJual * $prosenKomisi / 100; // hitung komisi berdasarkan persen komisi

echo "<p>Nilai penjualan salesman : Rp. $nilaiJual</p>"; 
echo "<p>Persentase Komisi : $prosenKomisi %</p>"; 
echo "<p>Komisi yang didapat salesman adalah Rp. $komisi</p>"; 
?>

</body>
</html>
