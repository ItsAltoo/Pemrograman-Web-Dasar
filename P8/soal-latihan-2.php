<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
<h1>Form Pendaftaran Mahasiswa Baru Universitas X</h1>

<form method="post" action="proses_pendaftaran.php">
    <table>
        <tr>
            <td>Nama Lengkap</td><td>:</td>
            <td><input type="text" name="nama" size="40"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td>:</td>
            <td><input type="text" name="tempat_lahir" size="30"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td>:</td>
            <td>
                <select name="tgl">
                    <?php
                        for($i=1; $i<=31; $i++)
                            echo "<option value='$i'>$i</option>";
                    ?>
                </select>
                <select name="bln">
                    <?php
                        for($i=1; $i<=12; $i++)
                            echo "<option value='$i'>$i</option>";
                    ?>
                </select>
                <select name="thn">
                    <?php
                        for($i=1980; $i<=2005; $i++)
                            echo "<option value='$i'>$i</option>";
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat Rumah</td><td>:</td>
            <td><textarea name="alamat" rows="4" cols="40"></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td>:</td>
            <td>
                <input type="radio" name="jk" value="Pria">Pria
                <input type="radio" name="jk" value="Wanita">Wanita
            </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td><td>:</td>
            <td><input type="text" name="asal_sekolah" size="40"></td>
        </tr>
        <tr>
            <td>Nilai UAN</td><td>:</td>
            <td><input type="text" name="nilai_uan" size="10"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

</body>
</html>
