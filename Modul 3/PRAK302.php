<!DOCTYPE html>
<html>
<head>
    <title>Soal 2</title>
</head>
<body>
    <form method="post">
        Tinggi : <input type="number" name="tinggi" value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : ''; ?>"><br>
        Alamat Gambar : <input type="text" name="img" value="<?php echo isset($_POST['img']) ? $_POST['img'] : ''; ?>"><br>
        <input type="submit" name="submit" value="Cetak"> <br> </br> 
    </form>

    <?php
    function tampilkan_persegi_terbelah($panjang, $img) {
        for ($i = 1; $i <= $panjang; $i++) {
            for ($j = 1; $j <= $panjang; $j++) {
                if ($i <= $j) {
                    echo '<img src="' .$img.'"style="width:20px; height:auto">';
                } else {
                    echo '<img src="' .$img.'"style="width:20px; height:auto; opacity:0">';
                }
            }
            echo "<br>";
        }
    }
    $img = $_POST['img'] ?? '';
    $panjang = $_POST['panjang'] ?? 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["panjang"])) {
            tampilkan_persegi_terbelah($panjang, $img);
        } else {
            echo "Silakan lengkapi form.";
        }
    }
    ?>
</body>
</html>