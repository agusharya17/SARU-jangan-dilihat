<?php
include_once("config.php");
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login_admin.php");
    exit;
}
$result = mysqli_query($mysqli, "SELECT * FROM pengguna ORDER BY Id_pengguna ASC");
?>
<html>

<head>
    <title>User</title>
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
                    <a class="nav-link active" href="user.php">User</a>
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
        <h1>Data Pengguna</h1><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['Nama_pengguna'] . "</td>";
                    echo "<td>" . $user_data['password'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['No_hp'] . "</td></tr>";
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