<?php 

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root","");

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST["telp"];


$query = $koneksi->query("insert into masyarakat values('$nik','$nama','$username','$password','$telp')");

header("location:login.php");

?>