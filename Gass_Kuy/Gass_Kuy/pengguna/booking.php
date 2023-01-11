<?php include_once("config.php");
$result = mysqli_query($mysqli, "SELECT pesan_tiket.*,tiket_wisata.harga FROM pesan_tiket JOIN tiket_wisata ON pesan_tiket.nama_tempat=tiket_wisata.nama_tempat ORDER BY id_pesan_tiket ASC");
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

?>

<html lang="en">

<head>
    <title>My Tiket</title>
    <!--untuk link css yang telah dibuat-->
    <link rel="stylesheet" href="style_booking.css">
    <!--untuk bootstrap dan js agar dapat menambahkan efek-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="div1-head">
        <div class="container1">
            <h1 class="h1-head">Gass_Kuy!</h1>
            <div class="menu">
                <a href="index.php" class="menu1">Home</a>
                <a href="booking.php" class="menu2">My Booking</a>
            </div>
            <div class="profile">
                <img src="logo_profile.png" class="img1-profile">
                <a href="profile.php" class="profile-a">My Profile</a>
            </div>
        </div>
    </div>
</head>

<body>
    <div class="container mt-3 div-body">
        <h1>My Booking Tiket</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Nama Tempat</th>
                    <th>Tanggal Booking</th>
                    <th>Jumlah Tiket</th>
                    <th>Harga Satuan Tiket(Rp.)</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    //MENYESUAIKAN DENGAN TABEL HEAD
                    echo "<tr>";
                    echo "<td>" . $user_data['nama_pemesan'] . "</td>";
                    echo "<td>" . $user_data['nama_tempat'] . "</td>";
                    echo "<td>" . $user_data['tanggal_booking'] . "</td>";
                    echo "<td>" . $user_data['jumlah_tiket'] . "</td>";
                    echo "<td>" . $user_data['harga'] . "</td></tr>";
                } ?>

            </tbody>
        </table>
        <div class="alert alert-warning">
            <strong>Warning!</strong> Anda Belum Melakukan Pembayaran!
        </div>
        <div class="alert alert-info">
            <strong>Info!</strong> Untuk Pembayaran, Segera Transfer Ke No.rek 13098957889900
        </div>
    </div>

    <!--DIV BODY MENGGUNAKAN BOOTSRTAP DAN CSS-->

        
    <footer class="footer">
        <h1>Gass_Kuy!</h1>
        <div class="footer-isi">
            <a href="index.php" class="footer-menu1">Home</a>
            <a href="booking.php" class="footer-menu2">My Booking</a>
        </div>
        <div class="footer-garis">
        </div>
        <p>© Copyright 2022, All Rights Reserved by gasskuy</p>

    </footer>
</body>

</html>