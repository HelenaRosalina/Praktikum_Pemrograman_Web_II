<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
<form method="post" action="">
        Batas Bawah : <input type="number" name="batas_bawah" value="<?php echo isset($_POST['batas_bawah']) ? $_POST['batas_bawah'] : ''; ?>">
        <br>
        Batas Atas : <input type="number" name="batas_atas" value="<?php echo isset($_POST['batas_atas']) ? $_POST['batas_atas'] : ''; ?>">
        <br>
        <input type="submit" name="submit" value="Cetak"> <br> </br>
    </form>

    <?php
    function tampilkan_bintang() {
        echo '<img src="star-images-9441.png" width="20" height="20">';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["batas_bawah"]) && !empty($_POST["batas_atas"])) {
            $batas_bawah = $_POST["batas_bawah"];
            $batas_atas = $_POST["batas_atas"];
            $bilangan = $batas_bawah;

            do {
                if (($bilangan + 7) % 5 == 0) {
                    tampilkan_bintang() ;
                } else {
                    echo $bilangan;
                }

                $bilangan++;
                echo " ";
            } while ($bilangan <= $batas_atas);
        } else {
            echo "Silakan lengkapi form.";
        }
    }
    ?>
</body>
</html>
