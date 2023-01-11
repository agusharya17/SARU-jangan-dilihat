<?php
include_once("config.php");
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login_admin.php");
    exit;
}
$result = mysqli_query($mysqli, "SELECT * FROM tiket_wisata ORDER BY id_tiket_wisata ASC");
?>
<html>

<head>
    <title>Tiket</title>
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
                    <a class="nav-link active" href="index.php">Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking1.php">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout1.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <h1>Tiket Wisata</h1><br>
        <a href="tambah.php" class="tombol_tambah">Tambah Tiket</a>
        <table class="table table-hover nav2-1-a1 ">
            <thead>
                <tr>
                    <th>Nama Tempat</th>
                    <th>Harga</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nama_tempat'] . "</td>";
                    echo "<td>" . $user_data['lokasi'] . "</td>";
                    echo "<td>" . $user_data['harga'] . "</td>";
                    echo "<td><a 
                    href='edit1.php?id_tiket_wisata=$user_data[id_tiket_wisata]'>Ubah Tiket</a> - <a 
                    href='delete1.php?id_tiket_wisata=$user_data[id_tiket_wisata]'>Hapus Tiket</a></td></tr>";
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