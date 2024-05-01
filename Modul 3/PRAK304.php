<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <?php
    $jumlahBintang = isset($_GET['jumlah']) ? (int)$_GET['jumlah'] : null;
    
    if ($jumlahBintang !== null) {
        echo '<div>';
        echo '<p>Jumlah bintang ' . $jumlahBintang . '<br><br><br></p>' ;
        for ($i = 0; $i < $jumlahBintang; $i++) {
            echo '<img src="star-images-9441.png" alt="star" width="70px">';
        }
        echo '</div>';
        echo '<div id="button-container">';
        echo '<a href="?jumlah=' . ($jumlahBintang + 1) . '"><button>Tambah</button></a>';
        echo '<a href="?jumlah=' . max(0, $jumlahBintang - 1) . '"><button>Kurang</button></a>';
        echo '</div>';
    } else {
        echo '<form method="GET" action="">';
        echo '<label for="jumlahBintang">Jumlah Bintang:</label>';
        echo '<input type="number" id="jumlahBintang" name="jumlah" min="0"><br>';
        echo '<button type="submit">Submit</button>';
        echo '</form>';
    }
    ?>
</body>
</html>