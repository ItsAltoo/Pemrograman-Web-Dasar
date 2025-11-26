<!DOCTYPE html>
<html>

<head>
    <title>Hitung Saldo Akhir</title>
</head>

<body>
    <h3>Soal 1: Simulasi Tabungan</h3>
    <form method="POST" action="">
        Saldo Awal (Rp): <input type="number" name="saldo_awal" value="1000000" required><br><br>
        Jangka Waktu (Bulan): <input type="number" name="bulan" value="12" required><br><br>
        <input type="submit" name="hitung" value="Hitung Saldo">
    </form>
    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $saldo = $_POST['saldo_awal'];
        $jangka_waktu = $_POST['bulan'];
        $biaya_admin = 9000;

        echo "Saldo Awal: Rp " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "Jangka Waktu: $jangka_waktu bulan <br><br>";

        for ($i = 1; $i <= $jangka_waktu; $i++) {

            if ($saldo < 1100000) {
                $bunga = ($saldo * 0.03) / 12;
            } else {
                $bunga = ($saldo * 0.04) / 12;
            }

            $saldo = $saldo + $bunga - $biaya_admin;
        }

        echo "<b>Saldo Akhir setelah $jangka_waktu bulan adalah: Rp " . number_format($saldo, 2, ',', '.') . "</b>";
    }
    ?>
</body>

</html>