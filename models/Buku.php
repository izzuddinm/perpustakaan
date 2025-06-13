<?php
require_once(__DIR__ . '/../config/Database.php');

class Buku {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM buku");
    }

    public function insert($data) {
        $stmt = $this->conn->prepare("INSERT INTO buku (judul, pengarang, tahun, penerbit, kategori) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $data['judul'], $data['pengarang'], $data['tahun'], $data['penerbit'], $data['kategori']);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM buku WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($data) {
        $stmt = $this->conn->prepare("UPDATE buku SET judul=?, pengarang=?, tahun=?, penerbit=?, kategori=? WHERE id=?");
        $stmt->bind_param("ssissi", $data['judul'], $data['pengarang'], $data['tahun'], $data['penerbit'], $data['kategori'], $data['id']);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM buku WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
