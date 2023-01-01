<?php
session_start();
require_once '../library/config.php';
require_once '../library/function.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = read_data("SELECT * FROM user WHERE email='$email'")[0];

if ($data and password_verify($password,$data['password'])) {
    $_SESSION['user'] = [
        'id' => $data['id'],
        'nama' => $data['nama'],
        'role' => $data['role'],
    ];
    header("location:index.php");
} else {
    header("location:login.php?pesan=1");
}
