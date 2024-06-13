<?php
session_start();

if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user_role = $_SESSION['user_role']; 

    echo '<a href="input.php">Tambah Data</a>';

    if($user_role === 'admin') {
        echo '<a href="edit.php">Edit Data</a>';
        echo '<a href="delete.php">Hapus Data</a>';
    }

    echo '<a href="logout.php">Logout</a>';
} else {

    header('Location: login.php');
    exit();
}
?>
