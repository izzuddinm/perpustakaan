<?php
require_once("../models/Buku.php");
$buku = new Buku();

if (isset($_POST['tambah'])) {
    $buku->insert([
        'judul' => $_POST['judul'],
        'pengarang' => $_POST['pengarang'],
        'tahun' => $_POST['tahun'],
        'penerbit' => $_POST['penerbit'],
        'kategori' => $_POST['kategori']
    ]);
    header("Location: ../views/buku.php");
    exit;
}

if (isset($_POST['update'])) {
    $buku->update([
        'id' => $_POST['id'],
        'judul' => $_POST['judul'],
        'pengarang' => $_POST['pengarang'],
        'tahun' => $_POST['tahun'],
        'penerbit' => $_POST['penerbit'],
        'kategori' => $_POST['kategori']
    ]);
    header("Location: ../views/buku.php");
    exit;
}

if (isset($_GET['hapus'])) {
    $buku->delete($_GET['hapus']);
    header("Location: ../views/buku.php");
    exit;
}
