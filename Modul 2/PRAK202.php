<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" ><span style="color: red;">* <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nama"])): ?>
            <span style="color: red;">nama tidak boleh kosong</span>
        <?php endif; ?></span>
        <br>
        NIM: <input type="text" name="nim" value="<?php echo isset($_POST['nim']) ? $_POST['nim'] : ''; ?>"><span style="color: red;">* <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nim"])): ?>
            <span style="color: red;">nim tidak boleh kosong</span>
        <?php endif; ?></span>
        <br>
        Jenis Kelamin: <span style="color: red;">* <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["jenis_kelamin"])): ?>
            <span style="color: red;">jenis kelamin tidak boleh kosong</span>
        <?php endif; ?></span>
        <br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?>> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>> Perempuan<br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

    if (isset($_POST["submit"]) && !empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["jenis_kelamin"])) {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        echo "<h2>Output: </h2>";
        echo $nama. "<br>";
        echo $nim. "<br>";
        echo $jenis_kelamin. "<br>";

    }
    ?>
</body>
</html>