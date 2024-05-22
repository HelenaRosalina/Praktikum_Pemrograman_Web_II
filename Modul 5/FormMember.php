<?php
require 'Model.php';

$id = $nama = $nomor = $alamat = $tgl_mendaftar = $tgl_terakhir_bayar = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $member = getMemberById($id);
    $nama = $member['nama_member'];
    $nomor = $member['nomor_member'];
    $alamat = $member['alamat'];
    $tgl_mendaftar = $member['tgl_mendaftar'];
    $tgl_terakhir_bayar = $member['tgl_terakhir_bayar'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = date ('Y-m-d H:i:s');
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    if ($id) {
        updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }

    header("Location: Member.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="text-align: center;">Form Member</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $nama ?>"><br>
        <label>Nomor:</label>
        <input type="text" name="nomor" value="<?= $nomor ?>"><br>
        <label>Alamat:</label>
        <textarea name="alamat"><?= $alamat ?></textarea><br>
        <label>Tanggal Mendaftar:</label>
        <input type="date" name="tgl_mendaftar" value="<?= $tgl_mendaftar ?>"><br>
        <label>Tanggal Terakhir Bayar:</label>
        <input type="date" name="tgl_terakhir_bayar" value="<?= $tgl_terakhir_bayar ?>"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
