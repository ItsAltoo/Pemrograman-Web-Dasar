<?php
define('UPAH_PER_JAM', 2000);
define('UPAH_LEMBUR_PER_JAM', 3000);
define('BATAS_JAM_NORMAL', 48);

$hasil_perhitungan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['jam_kerja']) && is_numeric($_POST['jam_kerja']) && $_POST['jam_kerja'] >= 0) {
        $jam_kerja = (float)$_POST['jam_kerja'];
        $upah_normal = 0;
        $upah_lembur = 0;
        $total_upah = 0;

        if ($jam_kerja <= BATAS_JAM_NORMAL) {
            $upah_normal = $jam_kerja * UPAH_PER_JAM;
            $total_upah = $upah_normal;
        } else {
            $upah_normal = BATAS_JAM_NORMAL * UPAH_PER_JAM;
            $jam_lembur = $jam_kerja - BATAS_JAM_NORMAL;
            $upah_lembur = $jam_lembur * UPAH_LEMBUR_PER_JAM;
            $total_upah = $upah_normal + $upah_lembur;
        }
        $total_upah_formatted = "Rp. " . number_format($total_upah, 0, ',', '.');
        $hasil_perhitungan = "Total upah untuk <strong>$jam_kerja jam</strong> kerja adalah: <br><strong>$total_upah_formatted,-</strong>";
    } else {
        $hasil_perhitungan = "Input tidak valid. Harap masukkan jumlah jam kerja (angka).";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Upah Karyawan</title>

</head>

<body>
    <div class="container">
        <h2>Kalkulator Upah Karyawan 💰</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="jam_kerja">Total Jam Kerja (per Minggu):</label>
            <input type="number" id="jam_kerja" name="jam_kerja" step="0.1" placeholder="Contoh: 52" required>
            <button type="submit">Hitung Upah</button>
        </form>
        <?php
        if (!empty($hasil_perhitungan)) {
            echo "<div class='hasil'>$hasil_perhitungan</div>";
        }
        ?>
    </div>
</body>

</html>