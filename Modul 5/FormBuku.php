<?php
require 'Model.php';

$id = $judul = $penulis = $penerbit = $tahun_terbit = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $book = getBookById($id);
    $judul = $book['judul_buku'];
    $penulis = $book['penulis'];
    $penerbit = $book['penerbit'];
    $tahun_terbit = $book['tahun_terbit'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    if ($id) {
        updateBook($id, $judul, $penulis, $penerbit, $tahun_terbit);
    } else {
        insertBook($judul, $penulis, $penerbit, $tahun_terbit);
    }

    header("Location: Buku.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Form Buku</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Judul:</label>
        <input type="text" name="judul" value="<?= $judul ?>"><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="<?= $penulis ?>"><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="<?= $penerbit ?>"><br>
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" value="<?= $tahun_terbit ?>"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
