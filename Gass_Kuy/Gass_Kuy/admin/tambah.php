<html>

<head>
    <title>Tambah Tiket</title>
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
    <!---->
    <div class="container">
        <h1 style="color: #FFFFFF; font-family:'Roboto'">Gass_Kuy!</h1><br><br>
        <a href="index.php" style="color:#FFFFFF;">Kembali ke halaman utama</a>

        <form action="tambah.php" method="post" name="form1">
            <h2>Perubahan Tiket</h2>
            <div class="form-group">
                <label for="nama_tempat">Nama Tempat</label>
                <input type="text" class="form-control" id="nama_tempat" name="nama_tempat">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Tambahkan</button>
        </form>
</body>

</html>
<?php

// kalau tombol bernama submit ditekan maka
if (isset($_POST['Submit'])) {
    // membuat variabel yang akan menampung nilai yang dimasukkan 
    $Nama_tempat = $_POST['nama_tempat'];
    $Harga = $_POST['harga'];
    $Lokasi = $_POST['lokasi'];
    include_once("config.php");
    // memasukkan data kedalam tabel tiket_wisata
    mysqli_query($mysqli, "INSERT INTO tiket_wisata VALUES('','$Nama_tempat', '$Harga', '$Lokasi')");
    echo "<script>
            alert('Tiket anda berhasil ditambahkan')
            </script>";
}

?>