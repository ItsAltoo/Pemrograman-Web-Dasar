<?php
$angkaBln = date("n");
switch ($angkaBln) {
    case 1:
        $namaBln = "Bulan Januari";
        break;
    case 2:
        $namaBln = "Bulan Februari";
        break;
    case 3:
        $namaBln = "Bulan Maret";
        break;
    case 4:
        $namaBln = "Bulan April";
        break;
    case 5:
        $namaBln = "Bulan Mei";
        break;
    case 6:
        $namaBln = "Bulan Juni";
        break;
    case 7:
        $namaBln = "Bulan Juli";
        break;
    case 8:
        $namaBln = "Bulan Agustus";
        break;
    case 9:
        $namaBln = "Bulan September";
        break;
    case 10:
        $namaBln = "Bulan Oktober";
        break;
    case 11:
        $namaBln = "Bulan November";
        break;
    case 12:
        $namaBln = "Bulan Desember";
        break;
}
echo "Nama bulan sekarang adalah " . $namaBln;
