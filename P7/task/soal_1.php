<?php
$saldoAwal = 1000000;
$bunga = 0.0025; // Ini adalah 0.25% (0.25 / 100)
$bulan = 11;
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",-";
?>