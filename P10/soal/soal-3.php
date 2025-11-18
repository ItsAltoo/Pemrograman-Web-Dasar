<?php
define('UPAH_LEMBUR_PER_JAM', 3000);
define('BATAS_JAM_NORMAL', 48);

$upah_golongan = [
    'A' => 4000,
    'B' => 5000,
    'C' => 6000,
    'D' => 7500,
];

$hasil_perhitungan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jam_valid = isset($_POST['jam_kerja']) && is_numeric($_POST['jam_kerja']) && $_POST['jam_kerja'] >= 0;
    $golongan_valid = isset($_POST['golongan']) && array_key_exists($_POST['golongan'], $upah_golongan);
    if ($jam_valid && $golongan_valid) {
        $jam_kerja = (float)$_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        $upah_normal_per_jam = $upah_golongan[$golongan];
        $upah_normal = 0;
        $upah_lembur = 0;
        $total_upah = 0;
        if ($jam_kerja <= BATAS_JAM_NORMAL) {
            $upah_normal = $jam_kerja * $upah_normal_per_jam;
            $total_upah = $upah_normal;
        } else {
            $upah_normal = BATAS_JAM_NORMAL * $upah_normal_per_jam;
            $jam_lembur = $jam_kerja - BATAS_JAM_NORMAL;
            $upah_lembur = $jam_lembur * UPAH_LEMBUR_PER_JAM;
            $total_upah = $upah_normal + $upah_lembur;
        }
        $total_upah_formatted = "Rp. " . number_format($total_upah, 0, ',', '.');
        $hasil_perhitungan = "Karyawan <strong>Golongan $golongan</strong> dengan <strong>$jam_kerja jam</strong> kerja, <br>menerima total upah: <br><strong>$total_upah_formatted,-</strong>";
    } else {
        $hasil_perhitungan = "Input tidak valid. Harap masukkan jam kerja dan pilih golongan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Upah Karyawan (Golongan)</title>

</head>

<body>

    <div class="container">
        <h2>Kalkulator Upah Karyawan (Golongan) 📊</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="jam_kerja">Total Jam Kerja (per Minggu):</label>
                <input type="number" id="jam_kerja" name="jam_kerja" step="0.1" placeholder="Contoh: 50" required>
            </div>
            <div class="form-group">
                <label for="golongan">Pilih Golongan:</label>
                <select id="golongan" name="golongan" required>
                    <option value="">-- Pilih Golongan --</option>
                    <option value="A">Golongan A (Rp. 4.000/jam)</option>
                    <option value="B">Golongan B (Rp. 5.000/jam)</option>
                    <option value="C">Golongan C (Rp. 6.000/jam)</option>
                    <option value="D">Golongan D (Rp. 7.500/jam)</option>
                </select>
            </div>
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