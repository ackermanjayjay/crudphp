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
    while($row = mysqli_fetch_assoc($ambil))
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

function cari($keyword)
{
    $query  = "SELECT * FROM mahasiswa
                WHERE 
                nama LIKE'%$keyword%'OR
                nrp LIKE '%$keyword%' OR 
                email LIKE '%$keyword%'";

                return query($query);
}

function register($data)
{
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

//cek user or not yet

$hasil= mysqli_query($koneksi,"SELECT username FROM users WHERE username='$username'");

if(mysqli_fetch_assoc($hasil))
{
    echo "<script>
                    alert('USER DAH TERDAFTAR!');
    </script>";
    return false;
}


//cek konfirm
if($password !== $password2)
{
    echo "<script>
                     alert('Password tidak cocok!');
    </script>";

    return false;
}
    //enkripsi pass
    $password=password_hash($password,PASSWORD_DEFAULT);
    
// return mysqli_affected_rows($koneksi);
   mysqli_query($koneksi, "INSERT INTO users VALUES(NULL,'$username','$password')");
    
    return mysqli_affected_rows($koneksi);

}
?>