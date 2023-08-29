<?php 

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

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
    
<nav style="position: fixed; width: 100%; background-color: white;">
  

        
            <ul class="nav justify-content-end" style="box-shadow: 2px 0px 5px grey; ">
                
           
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dasboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buat_laporan.php">Buat Laporan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="pembuat.php">About Me</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>
</nav>

</body>
</html>