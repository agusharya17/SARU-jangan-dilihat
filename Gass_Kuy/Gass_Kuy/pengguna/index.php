<?php
include_once("config.php");
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>
<html>

<head>
    <title>Gass_Kuy</title>
    <link rel="stylesheet" href="style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    
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

        <img src="gambar_japan.png" class="img2-gambar-jepang">
    </div>

    <div class="div2-body">
        <div class="container2">
            <div class="container2-isi">
                <h1 class="h1-body">Choose Tiket</h1>
                <p class="p-body">Lets Go To Japan! Enjoy</p>
                <div class="list-tiket1">
                    <div class="tiket1">
                        <div class="tiket1-1">
                            <div class="tiket1-1-1">
                                <div class="tiket1-1-1-H">
                                    <h1>Okinawa Churaumi Aquarium</h1>
                                    <div class="tiket1-1-1-R">
                                        <img src="rating.png">
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tiket1-1-1-B">
                                    <p>Rp.200.000/orang</p>
                                    <a href="pesan.php" class="tiket4-4-4-Button">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tiket2">
                        <div class="tiket2-2">
                            <div class="tiket2-2-2">
                                <div class="tiket2-2-2-H">
                                    <h1>Tokyo DisneySea</h1>
                                    <div class="tiket2-2-2-R">
                                        <img src="rating.png">
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tiket2-2-2-B">
                                    <p>Rp.650.000/orang</p>
                                    <a href="pesan.php" class="tiket4-4-4-Button">Book</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tiket3">
                        <div class="tiket3-3">
                            <div class="tiket3-3-3">
                                <div class="tiket3-3-3-H">
                                    <h1>Tokyo DisneyLand</h1>
                                    <div class="tiket3-3-3-R">
                                        <img src="rating.png">
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tiket4-4-4-B">
                                    <p>Rp.650.000/orang</p>
                                    <a href="pesan.php" class="tiket4-4-4-Button">Book</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tiket4">
                        <div class="tiket4-4">
                            <div class="tiket4-4-4">
                                <div class="tiket4-4-4-H">
                                    <h1>Golden Pavilion</h1>
                                    <div class="tiket4-4-4-R">
                                        <img src="rating.png">
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tiket4-4-4-B">
                                    <p>Rp.50.000/orang</p>
                                    <a href="pesan.php" class="tiket4-4-4-Button">Book</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <footer class="footer">
            <h1>Gass_Kuy!</h1>
            <div class="footer-isi">
                <a href="index.php" class="footer-menu1">Home</a>
                <a href="pesan.php" class="footer-menu2">My Booking</a>
            </div>
            <div class="footer-garis">
            </div>
            <p>© Copyright 2022, All Rights Reserved by gasskuy</p>

        </footer>
        

</body>

</html>