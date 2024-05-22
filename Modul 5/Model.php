<?php
require 'Koneksi.php';

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $pdo = getConnection();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $pdo = getConnection();
    $sql = "UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
}

function deleteMember($id) {
    $pdo = getConnection();
    $sql = "DELETE FROM member WHERE id_member = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function getAllMembers() {
    $pdo = getConnection();
    $sql = "SELECT * FROM member";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMemberById($id) {
    $pdo = getConnection();
    $sql = "SELECT * FROM member WHERE id_member = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertBook($judul, $penulis, $penerbit, $tahun_terbit) {
    $pdo = getConnection();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$judul, $penulis, $penerbit, $tahun_terbit]);
}

function updateBook($id, $judul, $penulis, $penerbit, $tahun_terbit) {
    $pdo = getConnection();
    $sql = "UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$judul, $penulis, $penerbit, $tahun_terbit, $id]);
}

function deleteBook($id) {
    $pdo = getConnection();
    $sql = "DELETE FROM buku WHERE id_buku = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function getAllBooks() {
    $pdo = getConnection();
    $sql = "SELECT * FROM buku";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBookById($id) {
    $pdo = getConnection();
    $sql = "SELECT * FROM buku WHERE id_buku = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertLoan($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = getConnection();
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function updateLoan($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = getConnection();
    $sql = "UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
}

function deleteLoan($id) {
    $pdo = getConnection();
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function getAllLoans() {
    $pdo = getConnection();
    $sql = "SELECT * FROM peminjaman";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLoanById($id) {
    $pdo = getConnection();
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>