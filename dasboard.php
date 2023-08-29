<?php 
session_start();


  if(!isset($_SESSION['nik'])){
    header('location:login.php');
  }

  

  $koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");
  $nik = $_SESSION['nik'];
  $nama = $_SESSION['username'];
  
  $query = $koneksi->query("select * from pengaduan where nik='$nik'");
  $data = $query->fetchAll();


  // if($koneksi){
  //   echo"berhasil";
  // }else{
  //   echo"gagal";
  // }

   include("navbar.php");

   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
    
    



<br>

<div class="container">
<br>
<br>
<p>Username : <?php echo $nama; ?></p>
<p>NIK : <?php echo $nik; ?></p>

<h2 style="text-align: center;">Selamat Datang di Laporan Pengaduan</h2>
<br>
<br>
<table class="table">
  <thead>

  <tr>
      
      <th scope="col">ID</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Status</th>  
      <th scope="col">Opsi</th>  

       
    </tr>


  <?php foreach($data as $pengaduan){ ?>
    
    <tr>
    
        <td scope="col"><?= $pengaduan["id_pengaduan"] ?></td>
        <td scope="col"><?= $pengaduan["nik"] ?></td>
        <td scope="col"><?= $pengaduan["isi_laporan"] ?></td>
        <td scope="col"><img style="width: 70px; height: auto;" src="image/<?= $pengaduan['foto'] ?>" ></td>
        <td scope="col"><?= $pengaduan["tgl_pengaduan"] ?></td>

        <td scope="col"><?= $pengaduan["status"] ?></td>

        
        <td scope="col"> <a href="ubah_laporan.php?id=<?= $pengaduan['id_pengaduan']?>"> <button type="button" class="btn btn-primary">Edit</button></a> 
         <a href="proses_hapus.php?id=<?= $pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-danger">X</button></a></td>

        
    </tr>
    <?php } ?>

  </thead>

</table>

</div>

</body>
</html>