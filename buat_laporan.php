
<?php 

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bs/css/bootstrap.min.css">

    <title>buat laporan</title>
</head>
<body>
    
<?php include "navbar.php"  ?>

<br>
<br>
<br>



<div class="container">
<h2>Buat Laporan Anda</h2>
<br>
<br>
    <form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">
      <table>
        

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required> </textarea>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">masukkan file</label>
        <input class="form-control" type="file" id="formFile" name="foto" required>
      </div>

      <button type="submit" class="btn btn-primary">Kirim</button>

        
    </form>
      </table>
  

</div>

<?php 


?>

</body>
</html>