<?php 
include 'navbar.php';
?>

<?php
session_start();

// $nik = $_SESSION['nik'];

$isi = $_POST['isi_laporan'];
$nik = $_SESSION['nik'];

$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat", "root", "");

$tanggal = date('Y-m-d');

$koneksi->query("insert into pengaduan values('','$tanggal','$nik','$isi','$nama_foto', '0')");

move_uploaded_file($asal_foto, "image/$nama_foto");

header("location:dasboard.php");
?>

















