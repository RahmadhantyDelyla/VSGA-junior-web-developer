<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
            <div class="content">
                <h2>Formulir Pemesanan Produk</h2>
                <p>
                    <table>
                        <form action="" method="post">
                            <tr>
                                <td>Nama Pemesan</td>
                                <td><input type="text" name="nama"></td>
                            </tr>
                            
                            <tr>
                                <td>No. HP</td>
                                <td><input type="text" name="hp"></td>
                            </tr>

                            <tr>
                                <td>Produk</td>
                                <td><input type="text" name="produk"></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><input type="text" name="harga"></td>
                            </tr>
                        </form>
                    </table>
                </p>
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