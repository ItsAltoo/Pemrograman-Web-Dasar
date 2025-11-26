<!DOCTYPE html>
<html>
<head>
    <title>Mencari Pasangan x, y, z</title>
</head>
<body>
    <h3>Soal 2: Penyelesaian x + y + z = 25</h3>
    
    <?php
    $jumlah_penyelesaian = 0;
    $target = 25;

    for ($x = 1; $x < $target; $x++) {
        
        for ($y = 1; $y < $target; $y++) {
            
            for ($z = 1; $z < $target; $z++) {
                
                if (($x + $y + $z) == $target) {
                    echo "x = $x, y = $y, z = $z <br>";
                    $jumlah_penyelesaian++;
                }
                
            }
        }
    }

    echo "<br><b>Jumlah penyelesaian: $jumlah_penyelesaian</b>";
    ?>
</body>
</html>
