<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM users WHERE
        username = '$username' AND password ='$password'";
$result = mysqli_query ($conn, $q);

if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
    if ($row['role'] == 'admin' ) {
        header ("location: d_admin.php");
    } elseif ($row['role'] == 'petugas') {
        header ("location: d_petugas.php");
    } elseif ($row['role'] == 'masyarakat') {
        header ("location: d_masyarakat.php");
    }

} else {
    echo "username atau password salah";
}

?>