<?php
include_once("config.php");

$Id_tiket_wisata = $_GET['id_tiket_wisata'];

$result = mysqli_query($mysqli, "DELETE FROM tiket_wisata WHERE id_tiket_wisata='$Id_tiket_wisata'");
echo "<script>
            alert('Tiket anda berhasil dihapus')
            </script>";

header("Location: index.php");
