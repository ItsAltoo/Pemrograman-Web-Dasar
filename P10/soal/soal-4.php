<?php
date_default_timezone_set('Asia/Makassar');

$bulan_ini_angka = (int)date('n');

$nama_bulan_map = [
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Agustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
];

$nama_bulan_ini = $nama_bulan_map[$bulan_ini_angka];

$jumlah_hari = 0;

switch ($bulan_ini_angka) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $jumlah_hari = 31;
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        $jumlah_hari = 30;
        break;

    case 2:
        if (date('L') == 1) {
            $jumlah_hari = 29;
        } else {
            $jumlah_hari = 28;
        }
        break;
}

$output = "Saat ini adalah bulan <strong>$nama_bulan_ini</strong>.<br>Jumlah hari di bulan ini adalah <strong>$jumlah_hari hari</strong>.";

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Hari dalam Bulan Ini</title>

</head>

<body>

    <div class="container">
        <h2>Info Bulan Ini 🗓️</h2>

        <div class="hasil">
            <?php echo $output; ?>
        </div>

    </div>

</body>

</html>