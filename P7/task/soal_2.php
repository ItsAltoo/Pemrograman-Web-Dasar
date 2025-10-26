<?php
$jumlahUang = 1575250;

// Menghitung pecahan Rp. 100.000
$a = ($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

// Menghitung pecahan Rp. 50.000
$b = ($sisa / 50000);
$sisa = $sisa % 50000;

// Menghitung pecahan Rp. 20.000
$c = ($sisa / 20000);
$sisa = $sisa % 20000;

// Menghitung pecahan Rp. 5.000
$d = ($sisa / 5000);
$sisa = $sisa % 5000;

// Menghitung pecahan Rp. 100
$e = ($sisa / 100);
$sisa = $sisa % 100;

// Menghitung pecahan Rp. 50
$f = ($sisa / 50);

echo "Jumlah Rp. 100.000 : " . $a . "<br />";
echo "Jumlah Rp. 50.000 : " . $b . "<br />";
echo "Jumlah Rp. 20.000 : " . $c . "<br />";
echo "Jumlah Rp. 5.000 : " . $d . "<br />";
echo "Jumlah Rp. 100 : " . $e . "<br />";
echo "Jumlah Rp. 50 : " . $f . "<br />";
?>