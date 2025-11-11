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
    echo "<p>Anda memasukkan bilangan pertama = " . $_POST['bil1'] . "</p>";
    echo "<p>Anda memasukkan bilangan kedua = " . $_POST['bil2'] . "</p>";
    ?>
</body>

</html>