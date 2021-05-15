<?php

// koneksi require jangan lupa
require 'configure.php';
//get data 
$mahasiswa= query("SELECT * FROM mahasiswa");



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
   
 <?php $i=1; ?>
 <?php foreach($mahasiswa as $mhs):?>
    <table class="table">
<td>
<tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">EMAIL</th>

    </td>
    </tr>

  <tbody>
  <td>
  <tr>
  
      <th scope="row"><?= $i;?> </th>
      <td><?php echo $mhs ["nama"];?></td>
      <td><?php echo $mhs ["nrp"];?></td>
      <td><?php echo $mhs ["email"];?></td>
    </td>
  
   </tr>
   <td> 
    <a href="update.php?id=<?= $mhs["id"];?>">ubah</a>
    <a href="hapus.php?id=<?= $mhs["id"];?>"onclick="return confirm('Hati-hati ! ');">hapus</a></td>
    </td>
    <?php $i++; ?>
  <?php endforeach;?>

  </tbody>

</table>

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