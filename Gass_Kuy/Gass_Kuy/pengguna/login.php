<?php
include_once("config.php");
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE Nama_pengguna= '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // buat session
            $_SESSION["login"]=true;
            header("Location: index.php");
            exit;
        } else {
            echo "<script>
            alert('Cek kembali username dan password')
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Gass_Kuy</title>
    <link rel="stylesheet" href="style_login.css" />
    <!--ini adalah div paling pertama pada header-->
    <div class="div1-head">
        <!--ini adalah div kedua pada header-->
        <!--Hanya berisi logo kuyjalan-->
        <span class="container">
            <h1 class="h1-head">Gass_Kuy!</h1>
        </span>
    </div>

</head>
<body>
    <!--div pertama body
    berisi gambar pada bagian sebelah kiri
    dan form login pada sebelah kanan        
-->
    <div class="div1-body">
        <img src="image.png" class="img1-body" align ="center" />
        <div class="div3-body">
            <h1 class="h1-body">Welcome to Gass_Kuy!</h1>
            <div class="div4-body">
                <div class="form-login">
                    <form action="" method="post" class="form-login">
                        <ul>
                            <li>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="input1" placeholder="masukkan username">
                            </li>
                            <li>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="input2" placeholder="masukkan password">
                            </li>
                            <!--Login menggunakan button-->
                            <button type="submit" name="login" class="button">Login</button>
                            <!--Untuk registrasi akun-->
                            <a href="registrasi.php">Registrasi Akun</a>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>