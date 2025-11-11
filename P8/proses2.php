<?php
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
?>

<html>

<head>
    <title>Contoh Request Post</title>
</head>

<body>
    <h1>Input Dua bilangan</h1>
    <?php
    echo "<p>Anda memasukkan bilangan pertama = " . $bil1 . "</p>";
    echo "<p>Anda memasukkan bilangan kedua = " . $bil2 . "</p>";
    ?>
</body>

</html>