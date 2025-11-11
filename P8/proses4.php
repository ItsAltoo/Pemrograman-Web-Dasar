<?php
$bill1 = $_POST['bill1'];
$bill2 = $_POST['bill2'];
$jumlah = $bill1 + $bill2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Request Post</title>
</head>
<body>
    <h1>Input dua bilangan</h1>
    <?php
    echo "<p>Anda memasukkan bilangan pertama = " . $bill1 . "</p>";
    echo "<p>Anda memasukkan bilangan kedua = " . $bill2 . "</p>";
    echo "<p>Jumlah kedua bilangan tersebut adalah = " . $jumlah . "</p>";
    ?>
</body>
</html>