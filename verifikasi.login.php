<?php
session_start();
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $koneksi->query($sql);

if($result->num_rows == 1) {
    // Login sukses, atur sesi admin
    $_SESSION['admin_logged_in'] = true;
    header('Location: admin_dashboard.php');
    exit();
} else {
    // Login gagal, kembalikan ke halaman login dengan pesan error
    $_SESSION['login_error'] = "Username atau password salah";
    header('Location: login_admin.php');
    exit();
}
?>
