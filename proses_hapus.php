<?php 
include "navbar.php";

$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root","");

$query = $koneksi->query("delete from pengaduan where id_pengaduan='$id'");

header("location:dasboard.php");
?>