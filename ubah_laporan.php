<?php 

$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

$query = $koneksi->query("select * from pengaduan where id_pengaduan='$id'");

$data = $query->fetch();
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

<div class="container">

    <form action="proses_update.php?id=<?= $data['id_pengaduan']?>"  method="POST">
      <table>
      
      

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required><?php echo $data['isi_laporan'] ?></textarea>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">masukkan file</label>
        <input class="form-control" type="file" id="formFile" name="foto">
      </div>

     
        
       <td><button type="submit" class="btn btn-primary">Update</button></td> 
      
    
       </table>
    </form>
     
  

</div>

<?php 


?>

</body>
</html>