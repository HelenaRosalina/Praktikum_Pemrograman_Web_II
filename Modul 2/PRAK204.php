<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
    <style>
        .input-container {
            display: inline-block;
            margin-bottom: 10px;
        }
        .input-container label {
            display: block;
        }
    </style>
</head>
<body>
    <div class="input-container"> 
        <form method="post" action="">
            Nilai : <input type="text" name="number" id="number" required value="<?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?>"> <br>
            <input type="submit" value="Konversi">
        </form>

        <?php
        function ejaan($number)
        {
            if ($number == 0) {
                return "<strong>Nol</strong>";
            } elseif ($number >= 1 && $number <= 9) {
                return "<strong>Satuan</strong>";
            } elseif ($number == 10 || ($number >= 20 && $number <= 99))  {
                return "<strong>Puluhan</strong>";
            } elseif ($number >= 11 && $number <= 19) {
                return "<strong>Belasan</strong>";
            } elseif ($number >= 100 && $number <= 999) {
                return "<strong>Ratusan</strong>";
            } else {
                return "<strong>Anda Menginput Melebihi Limit Bilangan</strong>";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
            $number = $_POST["number"];
            $output = ejaan($number);
            echo "<h2><p><strong>Hasil: </strong> $output</p><h2>";
        }
        ?>
    </div>
</body>
</html>