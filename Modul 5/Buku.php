<?php
require 'Model.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    deleteBook($id);
    header("Location: Buku.php");
    exit();
}

$books = getAllBooks();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Daftar Buku</h1>
    <a href="FormBuku.php">Tambah</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Action</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book['id_buku'] ?></td>
            <td><?= $book['judul_buku'] ?></td>
            <td><?= $book['penulis'] ?></td>
            <td><?= $book['penerbit'] ?></td>
            <td><?= $book['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $book['id_buku'] ?>">Edit</a>
                <a href="Buku.php?delete_id=<?= $book['id_buku'] ?>" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
