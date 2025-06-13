<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once("../models/Buku.php");

$buku = new Buku();
$daftarBuku = $buku->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku - Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Buku</h3>
        <div>
            <a href="../logout.php" class="btn btn-danger btn-sm">Logout</a>
            <a href="../process/pdf_report.php" class="btn btn-success btn-sm" target="_blank">Cetak PDF</a>
        </div>
    </div>
    <a href="tambah_buku.php" class="btn btn-primary mb-3">Tambah Buku</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = $daftarBuku->fetch_assoc()):
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['pengarang'] ?></td>
                <td><?= $row['tahun'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['kategori'] ?></td>
                <td>
                    <a href="edit_buku.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="../process/buku_process.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
