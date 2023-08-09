<?php 

  $koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

  $query = $koneksi->query("select * from pengaduan");
  $data = $query->fetchAll();

  // var_dump($data);

  // if($koneksi){
  //   echo"berhasil";
  // }else{
  //   echo"gagal";
  // }

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
    
    
<?php include "navbar.php" ?>


<br>

<div class="container">

<table class="table">
  <thead>

  <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Tanggal</th>      
    </tr>


  <?php foreach($data as $pengaduan){ ?>
    
    <tr>
      <th scope="row">1</th>
        <td scope="col"><?= $pengaduan["id_pengaduan"] ?></td>
        <td scope="col"><?= $pengaduan["nik"] ?></td>
        <td scope="col"><?= $pengaduan["isi_laporan"] ?></td>
        <td scope="col"><?= $pengaduan["foto"] ?></td>
        <td scope="col"><?= $pengaduan["tgl_pengaduan"] ?></td>
      
    </tr>
    <?php } ?>

  </thead>

</table>

</div>

</body>
</html>