<?php
include_once("config.php");
if (isset($_POST["daftar"])) {
    $username2 = stripslashes($_POST["username"]);
    $password2 = $_POST["password"];


    // UNTUK ENKRIPSI PASWWORD
    $password = password_hash($password2, PASSWORD_DEFAULT);

    // cek username sudah ada atau belum
    $result = mysqli_query($mysqli, "SELECT username FROM admin
    WHERE username = '$username2'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username yang dimasukkan telah terdaftar')
        </script>";
    }
    // MENAMBAHKAN DATA KE TABEL PENGGUNA
    mysqli_query($mysqli, "INSERT INTO admin VALUES ('','$username2','$password')");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registrasi sight in japan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: #42A7C3;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="color: #FFFFFF; font-family:'Roboto'">Gass_Kuy!</h1><br>
        <a href="login.php" style="color:#FFFFFF;">Halaman Login</a><br>
        <h2>Registrasi Akun Gass_Kuy</h2>
        <form action="registrasi.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            <button type="submit" class="btn btn-primary" name="daftar">Registrasi</button>
        </form>
    </div>
    <script>
        function daftar() {
            alert('data berhasil ditambahkan!')
        }
    </script>

</body>

</html>