<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
    <style>
        .merah { color: red; }
        .hijau { color: green; }
    </style>
</head>
<body>
    <form method="post" action="">
        Jumlah Peserta : <input type="text" name="jumlah_output" value="<?php echo isset($_POST['jumlah_output']) ? $_POST['jumlah_output'] : ''; ?>"> <br>
        <input type="submit" value="Cetak"> 
    </form>

    <?php
    function cetak_output($jumlah) {
        $counter = 1;
        while ($counter <= $jumlah) {
            $kelas = ($counter % 2 == 0) ? 'hijau' : 'merah';
            echo '<h2 class="' . $kelas . '">Peserta ke-' . $counter . '</h2>';
            $counter++;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah_input = isset($_POST['jumlah_output']) ? intval($_POST["jumlah_output"]) : 0;
        cetak_output($jumlah_input);
    }
    ?>
</body>
</html>