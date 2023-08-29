<?php 
$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat", "root", "");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
   
    body{
  
       background-color: rgb(233, 233, 233);
       
    }

    .container{
        font-family: arial;
      
    }
    .login{
        background-color: white;
        width: 40%;
        height: 70%;
        border-radius: 10px;
        box-shadow: 0px 0px 5px 1px rgb(173, 173, 173);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .login table {
        width: 80%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: left;
    }

    .login table tr td input{
        width: 100%;
			padding: 10px 15px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 1px solid #ccc;
            -webkit-transition: 0.1s;
			transition: 0.1s;
			outline: none;
            border-radius: 5px;
            
    }


    .login table tr td input:focus{
        border: 1px solid #303c6c;    
    }

    .login table tr td {
    font-size: 13px;
            
    }

    .tombol{
        padding: 10px 12px;
        cursor: pointer;
    }

    

 
</style>

<body>
    <div class="container">
        <div class="login">
            <h2 >Login User</h2>



            <form action="proses_daftar.php" method="POST">
                <table style="margin-top:15px;" >
                    <tr>
                        <td>
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" placeholder="Masukkan NIK" id="nik" required>
                        </td>
                        <td>
                            <label for="nama">Nama</label>
                            <input type="username" name="nama" placeholder="Masukkan Nama" id="nama" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Username</label>
                            <input type="username" name="username" placeholder="Masukkan Username" id="username" required>
                        </td>

                        <td>
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Masukkan Password" id="password" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="telp">No Telp</label>
                            <input type="tel" name="telp" placeholder="Masukkan No Telp" id="telp" required>
                        </td>
                    </tr>
                
                    <tr>
                        <td> <button class="tombol" type="submit">Masuk</button></td>
                    </tr>
                   <tr>
                    <td>
                        <p style="color: grey; font-style: italic; font-size: 12px;">Sudah punya akun? <a href="login.php">Masuk Disini</a></p>
                    </td>
                   </tr>
              
                </table>
               
            </form>
            
        </div>
        
    </div>

</body>
</html>