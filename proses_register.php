<?php
include "koneksi.php";

$nama= $_POAT['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role ="masyarakat";

$query =" INSERT INTO users (nama, username, password, role) 
          VALUES ('$nama', '$username', '$password', '$role')";

if (mysqli_query($conn, $query)){
    header("Location: login.php");
} else {
    echo "Register gagal!";
}
?>