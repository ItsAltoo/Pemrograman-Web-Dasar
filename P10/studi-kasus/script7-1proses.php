<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari bilangan terbesar dari 3 bilangan</title>
</head>

<body>
    <h1>Mencari bilangan terbesar dari 3 bilangan</h1>

    <?php
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];
    $bilangan3 = $_POST['bil3'];

    if ($bilangan1 > $bilangan2)
        $maxSementara = $bilangan1;
    else
        $maxSementara = $bilangan2;
    if ($bilangan3 > $maxSementara)
        $maxAkhir = $bilangan3;
    else
        $maxAkhir = $maxSementara;

    echo "<p>Nilai maksimum dari " . $bilangan1 . ", " . $bilangan2 . ", dan " . $bilangan3 . " adalah " . $maxAkhir . "</p>";


    if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3)) {
        $maxAkhir = $bilangan1;
    } else {
        if (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3)) {
            $maxAkhir = $bilangan2;
        } else {
            if (($bilangan3 > $bilangan1) && ($bilangan3 > $bilangan2)) {
                $maxAkhir = $bilangan3;
            }
        }
    }
    echo "<p>Nilai maksimum dari " . $bilangan1 . ", " . $bilangan2 . ", dan " . $bilangan3 . " adalah : " . $maxAkhir . "</p>";

    if ($bilangan1 > $bilangan2) {
        if ($bilangan1 > $bilangan3) {
            $maxAkhir = $bilangan1;
        } else {
            $maxAkhir = $bilangan3;
        }
    } else {
        if ($bilangan2 > $bilangan3) {
            $maxAkhir = $bilangan2;
        } else {
            $maxAkhir = $bilangan3;
        }
    }
    echo "<p>Nilai maksimum dari " . $bilangan1 . ", " . $bilangan2 . ", dan " . $bilangan3 . " adalah : " . $maxAkhir . "</p>";
    ?>
</body>

</html>