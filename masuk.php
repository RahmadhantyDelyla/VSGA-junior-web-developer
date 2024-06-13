<?php
$valid_username = "admin";
$valid_password = "admin";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nama']) && isset($_POST['pass'])) {
        $username = $_POST['nama'];
        $password = $_POST['pass'];

        if ($username === $valid_username && $password === $valid_password) {
            header("Location: daftarProduk.php");
            exit();
        } else {
            header("Location: masuk.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            </ul>
        </div>

        <div class="main">
            <div class="content">
                <h2>Login Admin</h2>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Nama Pengguna</td>
                            <td><input type="text" name="nama" required></td>
                        </tr>

                        <tr>
                            <td>Kata Sandi</td>
                            <td><input type="password" name="pass" id="" required></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" value="Masuk"></td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>

        <div class="footer">
            <div class="teksFooter">
                Copyright &copy; 2024. Iwan Service - Kota Pematangsiantar
            </div>
        </div>
    </div>
</body>
</html>