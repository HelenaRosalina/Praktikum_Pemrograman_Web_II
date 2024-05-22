<?php
require 'Model.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    deleteLoan($id);
    header("Location: Peminjaman.php");
    exit();
}

$loans = getAllLoans();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Daftar Peminjaman</h1>
    <a href="FormPeminjaman.php">Tambah</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Member</th>
            <th>ID Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Action</th>
        </tr>
        <?php foreach ($loans as $loan): ?>
        <tr>
            <td><?= $loan['id_peminjaman'] ?></td>
            <td><?= $loan['id_member'] ?></td>
            <td><?= $loan['id_buku'] ?></td>
            <td><?= $loan['tgl_pinjam'] ?></td>
            <td><?= $loan['tgl_kembali'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $loan['id_peminjaman'] ?>">Edit</a>
                <a href="Peminjaman.php?delete_id=<?= $loan['id_peminjaman'] ?>" onclick="return confirm('Are you sure you want to delete this loan?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
