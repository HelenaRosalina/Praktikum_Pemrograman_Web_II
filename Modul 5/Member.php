<?php
require 'Model.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    deleteMember($id);
    header("Location: Member.php");
    exit();
}

$members = getAllMembers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Members</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="text-align: center;">Daftar Member</h1>
    <a href="FormMember.php">Tambah</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Action</th>
        </tr>
        <?php foreach ($members as $member): ?>
        <tr>
            <td><?= $member['id_member'] ?></td>
            <td><?= $member['nama_member'] ?></td>
            <td><?= $member['nomor_member'] ?></td>
            <td><?= $member['alamat'] ?></td>
            <td><?= $member['tgl_mendaftar'] ?></td>
            <td><?= $member['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id=<?= $member['id_member'] ?>">Edit</a>
                <a href="Member.php?delete_id=<?= $member['id_member'] ?>" onclick="return confirm('Are you sure you want to delete this member?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>