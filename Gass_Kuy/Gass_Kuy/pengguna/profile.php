<?php

include_once("config.php");

if (isset($_POST['update'])) {
    $Id_pengguna = $_POST['Id_pengguna'];
    $Nama_pengguna = $_POST['Nama_pengguna'];
    $Password = $_POST['password'];
    $email = $_POST['email'];
    $No_hp = $_POST['No_hp'];
    $alamat = $_POST['alamat'];
    $result = mysqli_query($mysqli, "UPDATE pengguna SET Nama_pengguna='$Nama_pengguna', 'password' ='$Password', 
    email='$email',alamat='alamat', No_hp='$No_hp' WHERE Id_pengguna='$Id_pengguna'");
    header("Location: profile.php");
}
?>
<?php


$Id_pengguna = $_GET['Id_pengguna'];
$result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE Id_pengguna = '8'");

while ($user_data = mysqli_fetch_array($result)) {
    $Id_pengguna = $user_data['Id_pengguna'];
    $Nama_pengguna = $user_data['Nama_pengguna'];
    $Password = $user_data['password'];
    $email = $user_data['email'];
    $alamat = $user_data['alamat'];
    $No_hp = $user_data['No_hp'];
}
?>

<html lang="en">

<head>
    <title>KuyJalan</title>
    <link rel="stylesheet" href="style_profile.css">
    <link rel="stylesheet" href="style_footer.css">
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
    <div class="div1-body">
        <div class="div-profile">
            <h1>Your Profile</h1>
            <div class="form-profile">

                <form action="profile.php" class="form-profile" method="post" name="update_user">
                    <ul>
                        <li>
                            <label for="username">Username</label>
                            <input type="text" name="username" class="input1" value=<?php echo $Nama_pengguna; ?>>
                        </li>
                        <li>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="input2" value=<?php echo $email; ?>>
                        </li>
                        <li>
                            <label for="password">Password</label>
                            <input type="password" name="password" class="input3" value=<?php echo $Password; ?>>
                        </li>
                        <li>
                            <label for="No_hp">Nomor Handphone</label>
                            <input type="text" name="No_hp" id="No_hp" class="input4" value=<?php echo $No_hp; ?>>
                        </li>
                        <li>
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="input5" value=<?php echo $alamat; ?>>
                        </li>
                        <div class="div2-button">
                            <a href="logout.php">Log Out</a>
                        </div>

                    </ul>
                </form>

            </div>


        </div>
    </div>
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