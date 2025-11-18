<?php
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['tahun']) && is_numeric($_POST['tahun'])) {

        $tahun = (int)$_POST['tahun'];

        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            $hasil = "Tahun <strong>$tahun</strong> adalah <strong>TAHUN KABISAT</strong>.";
        } else {
            $hasil = "Tahun <strong>$tahun</strong> BUKAN TAHUN KABISAT.";
        }
    } else {
        $hasil = "Input tidak valid. Harap masukkan angka tahun yang benar.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tahun Kabisat</title>
</head>

<body>

    <div class="container">
        <h2>Pengecek Tahun Kabisat 🗓️</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="tahun">Masukkan Tahun:</label>
            <input type="number" id="tahun" name="tahun" placeholder="Contoh: 2024" required>
            <button type="submit">Cek Tahun</button>
        </form>

        <?php
        // 4. Tampilkan variabel $hasil jika tidak kosong
        if (!empty($hasil)) {
            echo "<div class='hasil'>$hasil</div>";
        }
        ?>
    </div>

</body>

</html>