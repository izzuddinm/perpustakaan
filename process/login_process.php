<?php
session_start();
require_once("../models/User.php");

$user = new User();
$data = $user->login($_POST['username'], $_POST['password']);

if ($data) {
    $_SESSION['user'] = $data;
    header("Location: ../views/buku.php");
} else {
    echo "Login gagal!";
}
