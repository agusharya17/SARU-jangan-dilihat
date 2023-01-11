<?php
include_once("config.php");
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login_admin.php");
    exit;
}
$result = mysqli_query($mysqli, "SELECT pesan_tiket.*,tiket_wisata.harga FROM pesan_tiket JOIN tiket_wisata ON pesan_tiket.nama_tempat=tiket_wisata.nama_tempat ORDER BY id_pesan_tiket ASC");
?>
<html>

<head>
    <title>Booking</title>
    <link rel="stylesheet" href="style_tiket.css">
    <link rel="stylesheet" href="style_footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <div class="container-fluid">
            <div class="nav2-1">
                <a class="navbar-brand nav2 " href="#">Gass_Kuy!</a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="booking1.php">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout1.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <h1>Data Pemesan Tiket</h1><br>
        <table class="table table-hover ">
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
                    echo "<tr>";
                    echo "<td>" . $user_data['nama_pemesan'] . "</td>";
                    echo "<td>" . $user_data['nama_tempat'] . "</td>";
                    echo "<td>" . $user_data['tanggal_booking'] . "</td>";
                    echo "<td>" . $user_data['jumlah_tiket'] . "</td>";
                    echo "<td>" . $user_data['harga'] . "</td></tr>";
                } ?>
            </tbody>
        </table>
        <footer class="footer">
            <h1>Gass_Kuy!</h1>
            <div class="footer-isi">
                <a href="index.php" class="footer-menu1">Tiket</a>
                <a href="user.php" class="footer-menu2">User</a>
                <a href="booking1.php" class="footer-menu3">Booking</a>
            </div>
            <div class="footer-garis">
            </div>
            <p>© Copyright 2022, All Rights Reserved by gasskuy</p>
        </footer>

</body>

</html>