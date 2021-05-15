<?php
require 'configure.php';
if(isset($_POST["register"]))
{
    if(register($_POST) > 0)
    {
        echo "<script>
      alert('data berhasil di register!');
      </script>";
   
 
    }
    else{
        echo "<script>
        alert('data gagal di register!');
        </script>";
        echo mysqli_error($koneksi);
       
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
<h1>Regis</h1>
    <form action="" method="post">
    <ul>
    <li>
    <label for="username">username</label>
    <input type="text" name="username" id="username:">
    </li>
    <li>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    </li>
    <li>
    <label for="password2">Konfirm Password:</label>
    <input type="password" name="password2" id="password2">
    </li>
    <li>
    <button type="register" name="register">register
    </button>
    </li>
    </ul>
    
    
    
    </form>
</body>
</html>