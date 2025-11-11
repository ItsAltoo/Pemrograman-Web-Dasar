<?php
$bil1 = $_GET['bil1'];
$bil2 = $_GET['bil2'];
$jumlah = $bil1 + $bil2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Request Get</title>
</head>

<body>
    <h1>Input dua bilangan</h1>
    <?php
    echo "<p>Anda memasukkan bilangan pertama = " . $bil1 . "</p>";
    echo "<p>Anda memasukkan bilangan kedua = " . $bil2 . "</p>";
    echo "<p>Jumlah kedua bilangan tersebut adalah = " . $jumlah . "</p>";
    ?>
</body>

</html>