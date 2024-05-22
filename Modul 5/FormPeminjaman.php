<?php
require 'Model.php';

$id = $id_member = $id_buku = $tgl_pinjam = $tgl_kembali = '';
$errors = [];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $loan = getLoanById($id);
    if ($loan) {
        $id_member = $loan['id_member'];
        $id_buku = $loan['id_buku'];
        $tgl_pinjam = $loan['tgl_pinjam'];
        $tgl_kembali = $loan['tgl_kembali'];
    } else {
        $errors[] = "Loan not found!";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (empty($id_member) || empty($id_buku) || empty($tgl_pinjam) || empty($tgl_kembali)) {
        $errors[] = "All fields are required.";
    } else {
        if ($id) {
            updateLoan($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
        } else {
            insertLoan($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
        }
        header("Location: Peminjaman.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Form Peminjaman</h1>
    <?php if (!empty($errors)): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
        <label>ID Member:</label>
        <input type="text" name="id_member" value="<?= htmlspecialchars($id_member) ?>"><br>
        <label>ID Buku:</label>
        <input type="text" name="id_buku" value="<?= htmlspecialchars($id_buku) ?>"><br>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="<?= htmlspecialchars($tgl_pinjam) ?>"><br>
        <label>Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" value="<?= htmlspecialchars($tgl_kembali) ?>"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
