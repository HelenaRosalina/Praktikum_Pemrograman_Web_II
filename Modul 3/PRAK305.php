<!DOCTYPE html>
<html>
<head>
    <title>Soal 5</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="input_string">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    function cetak_string($string_input) {
        echo "<h2>Input:</h2>";
        echo $string_input;

        $string_input = strtolower($string_input);
        $counter = 0;

        echo "<h2>Output:</h2>";

        do {
             echo ucfirst($string_input[$counter]);
                     echo str_repeat($string_input[$counter], strlen($string_input) - 1);
            $counter++;
        } while ($counter < strlen($string_input));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["input_string"])) {
            cetak_string($_POST["input_string"]);
        } else {
            echo "<h2>Silakan masukkan string.</h2>";
        }
    }
    ?>
</body>
</html>