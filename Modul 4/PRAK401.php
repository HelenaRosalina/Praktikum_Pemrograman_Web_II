<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Panjang : <input type="text" name="panjang"><br>
    Lebar : <input type="text" name="lebar"><br>
    Nilai : <input type="text" name="nilai"><br>
    <input type="submit" name="submit" value="Cetak">
    <br></br>
</form>

<?php
function cetakMatriks($panjang, $lebar, $nilai) {
    $nilai_array = explode(" ", $nilai);
    $index = 0;

    if ($panjang * $lebar != count($nilai_array)) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        return;
    }

    echo "<table>";
    for ($i = 0; $i < $panjang; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $lebar; $j++) {
            echo "<td>" . $nilai_array[$index++] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $nilai = $_POST["nilai"];
    cetakMatriks($panjang, $lebar, $nilai);
}
?>
</body>
</html>
