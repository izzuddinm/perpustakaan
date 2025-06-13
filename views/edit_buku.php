<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once("../models/Buku.php");
$buku = new Buku();

$id = $_GET['id'];
$data = $buku->getById($id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Buku</h3>
    <form method="POST" action="../process/buku_process.php">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="mb-2">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= $data['judul'] ?>" required>
        </div>
        <div class="mb-2">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control" value="<?= $data['pengarang'] ?>" required>
        </div>
        <div class="mb-2">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" value="<?= $data['tahun'] ?>" required>
        </div>
        <div class="mb-2">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?= $data['penerbit'] ?>" required>
        </div>
        <div class="mb-2">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?= $data['kategori'] ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="buku.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
