<?php include_once("config.php");
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

?>
<html lang="en">

<head>
    <title>Booking Tiket</title>
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
        <h1 style="color: #FFFFFF; font-family:'Roboto'">Gass_Kuy!</h1><br><br>
        <a href="index.php" style="color:#FFFFFF;">Kembali ke halaman utama</a>
        <h2>Choose Your Place to Enjoy!</h2>
        <form action="pesan.php" method="post" name="form1">
            <div class="form-check-inline">
                <label class="form-check-label" for="nama_tempat">
                    <input type="radio" class="form-check-input" id="nama_tempat" name="nama_tempat" value="Okinawa Churaumi Aquarium">Okinawa Churaumi Aquarium
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="nama_tempat">
                    <input type="radio" class="form-check-input" id="nama_tempat" name="nama_tempat" value="Tokyo Disneysea">Tokyo DisneySea
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="nama_tempat">
                    <input type="radio" class="form-check-input" id="nama_tempat" name="nama_tempat" value="Tokyo Disneyland">Tokyo DisneyLand</label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="nama_tempat">
                    <input type="radio" class="form-check-input" id="nama_tempat" name="nama_tempat" value="Golden Pavilion">Golden Pavilion</label><br>
            </div>
            <br>
            <h2>Pengisian data pemesan</h2>
            <div class="form-group">
                <label for="nama_pemesan">Nama pemesan</label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
            </div>
            <div class="form-group">
                <label for="tanggal_booking">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="tanggal_booking" name="tanggal_booking">
            </div>
            <div class="form-group">
                <label for="jumlah_tiket">Jumlah Tiket</label>
                <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Book</button>
        </form>
        <?php
        include_once("config.php");
        if (isset($_POST['Submit'])) {
            $Nama_tempat = $_POST['nama_tempat'];
            $Nama_pemesan = $_POST['nama_pemesan'];
            $Tanggal_booking = $_POST['tanggal_booking'];
            $Jumlah_tiket = $_POST['jumlah_tiket'];

            mysqli_query($mysqli, "INSERT INTO pesan_tiket VALUES('','$Nama_tempat', '$Nama_pemesan', '$Tanggal_booking', '$Jumlah_tiket')");
            echo "<script>
            alert('Tiket anda berhasil dipesan')
            </script>
            ";
        }

        ?>

    </div>
</body>

</html>