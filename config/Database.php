<?php
class Database {
    private $host = "localhost";
    private $db = "perpustakaan_db";
    private $user = "root";
    private $pass = "root1234";
    public $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Connection Failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
?>
