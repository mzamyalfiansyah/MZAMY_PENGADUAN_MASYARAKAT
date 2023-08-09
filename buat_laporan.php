
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

    <form action="dasboard.php">
      
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Anda</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      

      <div class="input-group mb-3">
        <label style="background-color: #0d6efd; color: white;" class="input-group-text" for="inputGroupFile01 ">Upload</label>
        <input type="file" class="form-control" id="inputGroupFile01">
      </div>

      <button type="button" class="btn btn-outline-primary">Kirim</button>

    </form>

</div>

</body>
</html>