<?php

include_once("config.php");

if (isset($_POST['update'])) {
    //menginisialisasi nilai dari tiap variabel
    $Id_tiket_wisata = $_POST['id_tiket_wisata'];
    $Nama_tempat = $_POST['nama_tempat'];
    $Harga = $_POST['harga'];
    $Lokasi = $_POST['lokasi'];

    // untuk mengubah nilai dalam tabel berdasarkan id tiket
    $result = mysqli_query($mysqli, "UPDATE tiket_wisata SET nama_tempat='$Nama_tempat',harga='$Harga', lokasi='$Lokasi' WHERE id_tiket_wisata='$Id_tiket_wisata'");


    header("Location: index.php");
}
?>
<?php
include_once("config.php");
$Id_tiket_wisata = $_GET['id_tiket_wisata'];


$result = mysqli_query($mysqli, "SELECT * FROM tiket_wisata WHERE id_tiket_wisata  = '$Id_tiket_wisata'");

while ($user_data = mysqli_fetch_array($result)) {
    $Id_tiket_wisata = $user_data['id_tiket_wisata'];
    $Nama_tempat = $user_data['nama_tempat'];
    $Harga = $user_data['harga'];
    $Lokasi = $user_data['lokasi'];
}
?>
<html>

<head>
    <title>Ubah Tiket</title>
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

        <form action="edit1.php" method="post" name="form1">
            <h2>Perubahan Tiket</h2>
            <div class="form-group">
                <label for="nama_tempat">Nama Tempat</label>
                <input type="text" class="form-control" id="nama_tempat" name="nama_tempat"
                    value=<?php echo $Nama_tempat; ?>>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value=<?php echo $Harga; ?>>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value=<?php echo $Lokasi; ?>>
                <input type="hidden" name="id_tiket_wisata" value=<?php echo $_GET['id_tiket_wisata'];?>>
            </div>
            <button type="submit" class="btn btn-primary" name="update"
                onclick="alert('Data berhasil diperbaharui')">Perbaharui</button>
        </form>
</body>

</html>