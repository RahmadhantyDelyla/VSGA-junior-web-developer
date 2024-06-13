<?php
$role = $_SESSION['role']; 

if ($role === 'admin') {
    echo '<a href="edit.php">Edit Data</a>';
    echo '<a href="delete.php">Hapus Data</a>';
    echo '<a href="input.php">Input Data</a>';
} elseif ($role === 'pengunjung') {
    echo '<a href="input.php">Input Data</a>';
}
?>
