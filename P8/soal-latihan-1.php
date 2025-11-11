<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP dengan Form</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
        }

        .container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            border-left: 5px solid #007bff;
        }

        .output p {
            margin: 5px 0;
            font-size: 16px;
        }

        .output strong {
            color: #333;
        }
    </style>
</head>

<body>

    <?php
    // Variabel untuk menyimpan hasil
    $saldo_akhir = null;
    $pecahan_uang = null;

    // Cek jika form saldo disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung_saldo'])) {
        $saldo_awal = (float)$_POST['saldo_awal'];
        $bunga_persen = (float)$_POST['bunga'];
        $bulan = (int)$_POST['bulan'];

        // Konversi bunga dari persen ke desimal
        $bunga_desimal = $bunga_persen / 100;

        // Hitung saldo akhir
        $saldo_akhir = $saldo_awal + ($saldo_awal * $bunga_desimal * $bulan);
    }

    // Cek jika form pecahan uang disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung_pecahan'])) {
        $jumlah_uang = (int)$_POST['jumlah_uang'];
        $sisa = $jumlah_uang;

        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50];
        $hasil_pecahan = [];

        foreach ($pecahan as $nilai) {
            $jumlah_lembar = floor($sisa / $nilai);
            if ($jumlah_lembar > 0) {
                $hasil_pecahan[$nilai] = $jumlah_lembar;
                $sisa %= $nilai;
            }
        }
        if ($sisa > 0) {
            $hasil_pecahan['sisa'] = $sisa;
        }
        $pecahan_uang = $hasil_pecahan;
    }
    ?>

    <!-- Form 1: Menghitung Saldo Akhir -->
    <div class="container">
        <h2>Kalkulator Saldo Akhir</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="saldo_awal">Saldo Awal (Rp):</label>
                <input type="number" id="saldo_awal" name="saldo_awal" required>
            </div>
            <div class="form-group">
                <label for="bunga">Bunga per Bulan (%):</label>
                <input type="number" id="bunga" name="bunga" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="bulan">Jumlah Bulan:</label>
                <input type="number" id="bulan" name="bulan" required>
            </div>
            <div class="btn-group">
                <button type="submit" name="hitung_saldo" class="btn">Hitung Saldo Akhir</button>
                <button type="button" id="reset_saldo" class="btn btn-secondary">Reset</button>
            </div>
        </form>

        <?php if ($saldo_akhir !== null): ?>
            <div class="output" id="output_saldo">
                <p><strong>Saldo Akhir:</strong> Rp. <?php echo number_format($saldo_akhir, 2, ',', '.'); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Form 2: Menghitung Pecahan Uang -->
    <div class="container">
        <h2>Kalkulator Pecahan Uang</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="jumlah_uang">Jumlah Uang (Rp):</label>
                <input type="number" id="jumlah_uang" name="jumlah_uang" required>
            </div>
            <div class="btn-group">
                <button type="submit" name="hitung_pecahan" class="btn">Hitung Pecahan</button>
                <button type="button" id="reset_pecahan" class="btn btn-secondary">Reset</button>
            </div>
        </form>

        <?php if ($pecahan_uang !== null): ?>
            <div class="output" id="output_pecahan">
                <p><strong>Detail Pecahan:</strong></p>
                <?php foreach ($pecahan_uang as $pecahan => $jumlah): ?>
                    <?php if ($pecahan != 'sisa'): ?>
                        <p>Rp. <?php echo number_format($pecahan); ?> : <?php echo $jumlah; ?> lembar/koin</p>
                    <?php else: ?>
                        <p>Sisa : Rp. <?php echo number_format($jumlah); ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Reset for Saldo Akhir form
        document.getElementById('reset_saldo').addEventListener('click', function() {
            // Clear input fields
            document.getElementById('saldo_awal').value = '';
            document.getElementById('bunga').value = '';
            document.getElementById('bulan').value = '';

            // Clear output div
            const outputDiv = document.getElementById('output_saldo');
            if (outputDiv) {
                outputDiv.innerHTML = '';
            }
        });

        // Reset for Pecahan Uang form
        document.getElementById('reset_pecahan').addEventListener('click', function() {
            // Clear input field
            document.getElementById('jumlah_uang').value = '';

            // Clear output div
            const outputDiv = document.getElementById('output_pecahan');
            if (outputDiv) {
                outputDiv.innerHTML = '';
            }
        });
    </script>

</body>

</html>