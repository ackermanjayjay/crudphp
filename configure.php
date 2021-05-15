<?php
//kembali ke database
$koneksi = mysqli_connect("localhost","root","","phpdasar");

//buat function or fungsi
function query($query)
{
    //dikasih global jangan lupa
    global $koneksi;
    $ambil= mysqli_query($koneksi,$query);
    $rows=[];
    while($row = mysqli_fetch_assoc($ambil) )
    {
        $rows[]= $row;
    }
    return $rows;
}







function insert($data)
{
    global $koneksi;

    $nama=htmlspecialchars($data["nama"]);
    $nrp=htmlspecialchars($data["nrp"]);
    $email=htmlspecialchars($data["email"]);

    $query = "INSERT INTO mahasiswa
    VALUES
    (null,'$nama','$nrp','$email')";
mysqli_query($koneksi,"$query");

return mysqli_affected_rows($koneksi);
}



function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id =$id");
    return mysqli_affected_rows($koneksi);
}


function change($data)
{
    global $koneksi;
    $id = $data["id"];
    $nama=htmlspecialchars($data["nama"]);
    $nrp=htmlspecialchars($data["nrp"]);
    $email=htmlspecialchars($data["email"]);

    $query = "UPDATE mahasiswa SET
    nama ='$nama',
    nrp ='$nrp',
    email = '$email'
    WHERE id = $id";

    mysqli_query($koneksi,"$query");

    return mysqli_affected_rows($koneksi);
}
?>