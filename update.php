<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);

    $sql = "UPDATE produk SET  
            namaProduk = '$nama', 
            keteranganProduk = '$keterangan', 
            hargaProduk = '$harga', 
            statusProduk = '$status' 
            WHERE idProduk = $id";
    if ($koneksi->query($sql) === TRUE) {
        header("Location: daftarProduk.php");
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
}
?>