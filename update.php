<?php
//koneksi db 
require 'configure.php';

//ambil data di url

$id = $_GET["id"];

//query berdasar id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



if(isset($_POST["submit"]))
{
//cek data diubah
if( change($_POST) > 0 )
{
  echo "<script>
      alert('data berhasil diubah!');
document.location.href= 'admin.php';
      </script>";
}
else {
  echo"<script>
  alert('data Gagal diubah!');
document.location.href= 'admin.php';
  </script>";

}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hpdate</title>
  </head>
  <body>
    <h1>Ubah</h1>
    <form action="" method="post">
    <input type="hidden" name="id"value="<?= $mhs["id"];?>">
   <ul>
   <li>
   <label for="nama">Nama</label>
   <input type="text" name="nama" id="nama"required value="<?= $mhs["nama"];?>">
   </li>
   <li>
   <label for="nrp">Nrp</label>
   <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"];?>">
   </li>
   <li>
   <label for="email">Email</label>
   <input type="text" name="email" id="email" required value="<?= $mhs["email"];?>">
   </li>
   </ul>
  <button type="submit" name="submit" 
  class="btn btn-primary">Change Data</button>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>