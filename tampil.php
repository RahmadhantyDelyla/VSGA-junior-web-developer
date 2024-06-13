<?php
require 'koneksi.php';

$sql = "SELECT * FROM produk";
$result = $koneksi->query($sql);

if($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <img width="1080px" src="Images/Header.png" alt="">
        </div>

        <div class="nav-bar">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="visi.php">Visi & Misi</a></li>
                <li><a href="tampil.php">Produk Kami</a></li>
                <li><a href="pesan.php">Pesan</a></li>
                <li><a href="kontak.php">Kontak Kami</a></li>
                <li><a href="masuk.php">Masuk</a></li>
            </ul>
        </div>

        <div class="main">
        <?php
        require 'koneksi.php';
            $sql = "SELECT * FROM produk";
            $result = $koneksi->query($sql);
            if ($result->num_rows > 0) {
                echo "<table class='data'>";
                echo "<tr>";
                echo "<th class='col1'>ID</th>";
                echo "<th>Nama Produk</th>";
                echo "<th>Keterangan</th>";
                echo "<th>Harga</th>";
                echo "<th>Status</th>";
                echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='col1'>".$row["idProduk"]."</td>";
                echo "<td>".$row["namaProduk"]."</td>";
                echo "<td>".$row["keteranganProduk"]."</td>";
                echo "<td>".$row["hargaProduk"]."</td>";
                echo "<td>".$row["statusProduk"]."</td>";
                echo "</tr>";
            }
                echo "</table>";
            }
        ?>

        </div>

        <div class="footer">
            <div class="teksFooter">
                Copyright &copy; 2024. Iwan Service - Kota Pematangsiantar
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>