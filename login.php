<?php
session_start();
if( isset($_SESSION["login"]) )
{
    header("Location: admin.php");
    exit;
}
require 'configure.php';
if(isset($_POST["login"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];

$hasil=mysqli_query($koneksi,"SELECT * FROM users WHERE 
                username='$username'");

                //cek username

                if(mysqli_num_rows($hasil)==1)
                {
                    //cek pass
                    $pass=mysqli_fetch_assoc($hasil);
                    if(password_verify($password,$pass["password"])){
                        header("Location:admin.php");
                    exit;
                    }
                }

                $error=true;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>LGOIN PAGE</title>
  </head>
  <body>
    <h1>LOGIN</h1>
    <?php
    if(isset($error)):?>
    "<script>
      alert('user / pass salah!')
      </script>";
      <?php endif; ?>
    
   <form action="" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">USERNAME</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="login"class="btn btn-primary">LOGIN</button>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>