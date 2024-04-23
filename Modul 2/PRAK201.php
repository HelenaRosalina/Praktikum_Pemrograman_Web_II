<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <?php
    function mengurutkan($nama1, $nama2, $nama3)
    {
        if ($nama1 <= $nama2 && $nama1 <= $nama3) {
            $nama_terkecil = $nama1;
            if ($nama2 <= $nama3) {
                $nama_tengah = $nama2;
                $nama_terbesar = $nama3;
            } else {
                $nama_tengah = $nama3;
                $nama_terbesar = $nama2;
            }
        } elseif ($nama2 <= $nama1 && $nama2 <= $nama3) {
            $nama_terkecil = $nama2;
            if ($nama1 <= $nama3) {
                $nama_tengah = $nama1;
                $nama_terbesar = $nama3;
            } else {
                $nama_tengah = $nama3;
                $nama_terbesar = $nama1;
            }
        } else {
            $nama_terkecil = $nama3;
            if ($nama1 <= $nama2) {
                $nama_tengah = $nama1;
                $nama_terbesar = $nama2;
            } else {
                $nama_tengah = $nama2;
                $nama_terbesar = $nama1;
            }
        }
        return "$nama_terkecil<br>$nama_tengah<br>$nama_terbesar";
    }

    if (isset($_POST["submit"])) {
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];
        
        $hasil_urutan = mengurutkan($nama1, $nama2, $nama3);

        echo "<p>$hasil_urutan</p>";
    } else {
    ?>
    <form method="post" action="">
        Nama: 1 <input type="text" name="nama1" required><br>
        Nama: 2 <input type="text" name="nama2" required><br>
        Nama: 3 <input type="text" name="nama3" required><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>
    <?php } ?>
</body>
</html>