<?php

session_start();

$un = $_POST['username'];
$pw = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root","");

$query = $koneksi->query("select * from masyarakat where username='$un' AND password='$pw'");

$jumlahBaris = $query->rowCount();

if($jumlahBaris > 0){
    
    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';
    $_SESSION['username'] = $un;

    header("location:dasboard.php");
}else{
    header("location:login.php");
}

?>