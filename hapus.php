<?php
session_start();
// koneksi require jangan lupa

if(!isset($_SESSION["login"]))
{
  header("Location:login.php");
  exit;
}
require 'configure.php';
$id=$_GET["id"];

if(hapus($id)>0)
{
    echo "<script>
      alert('data berhasil dihapus!');
document.location.href= 'admin.php';
      </script>";
}
else{
    echo "<script>
      alert('data gagal ditambahkan!');
document.location.href= 'admin.php';
      </script>";
}
?>