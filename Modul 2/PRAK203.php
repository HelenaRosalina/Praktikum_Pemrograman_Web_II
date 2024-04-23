<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <form method="post" action="">
        Nilai: <input type="text" name="suhu" value="<?php echo isset($_POST['suhu']) ? $_POST['suhu'] : ''; ?>" required><br><br>
        Dari :<br>
        <input type="radio" name="dari" value="C" <?php echo isset($_POST['dari']) && $_POST['dari'] == 'C' ? 'checked' : ''; ?>> Celcius<br>
        <input type="radio" name="dari" value="F" <?php echo isset($_POST['dari']) && $_POST['dari'] == 'F' ? 'checked' : ''; ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="R" <?php echo isset($_POST['dari']) && $_POST['dari'] == 'R' ? 'checked' : ''; ?>> Reamur<br>
        <input type="radio" name="dari" value="K" <?php echo isset($_POST['dari']) && $_POST['dari'] == 'K' ? 'checked' : ''; ?>> Kelvin<br><br>
        Ke :<br>
        <input type="radio" name="ke" value="C" <?php echo isset($_POST['ke']) && $_POST['ke'] == 'C' ? 'checked' : ''; ?>> Celcius<br>
        <input type="radio" name="ke" value="F" <?php echo isset($_POST['ke']) && $_POST['ke'] == 'F' ? 'checked' : ''; ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="R" <?php echo isset($_POST['ke']) && $_POST['ke'] == 'R' ? 'checked' : ''; ?>> Reamur<br>
        <input type="radio" name="ke" value="K" <?php echo isset($_POST['ke']) && $_POST['ke'] == 'K' ? 'checked' : ''; ?>> Kelvin<br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    function konversi($suhu, $dari, $ke)
    {
        switch ($dari) {
            case 'F':
                $suhu_celcius = ($suhu - 32) * (5 / 9);
                break;
            case 'R':
                $suhu_celcius = $suhu * (5 / 4);
                break;
            case 'K':
                $suhu_celcius = $suhu - 273.15;
                break;
            default:
                $suhu_celcius = $suhu;
                break;
        }

        switch ($ke) {
            case 'F':
                $hasil = ($suhu_celcius * 9 / 5) + 32;
                $simbol_ke = '°F';
                break;
            case 'R':
                $hasil = $suhu_celcius * 4 / 5;
                $simbol_ke = '°Re';
                break;
            case 'K':
                $hasil = $suhu_celcius + 273.15;
                $simbol_ke = 'K';
                break;
            default:
                $hasil = $suhu_celcius;
                $simbol_ke = '°C';
                break;
        }

        return array($hasil, $simbol_ke);
    }

    if (isset($_POST["submit"])) {
        $suhu = $_POST["suhu"];
        $dari = $_POST["dari"];
        $ke = $_POST["ke"];
        
        list($hasil_konversi, $simbol_ke) = konversi($suhu, $dari, $ke);
        echo "<h2>Hasil Konversi: $hasil_konversi $simbol_ke</h2>";
    }
    ?>
</body>
</html>