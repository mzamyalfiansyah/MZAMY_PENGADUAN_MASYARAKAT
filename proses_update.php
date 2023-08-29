<?php 
include "navbar.php";


$isi = $_POST['isi_laporan'];
$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root","");

$query = $koneksi->query("update pengaduan set isi_laporan='$isi' where id_pengaduan='$id'");


header("location:dasboard.php");



?>