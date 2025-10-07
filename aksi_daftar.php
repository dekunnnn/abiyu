<?php
include '../conn/koneksi.php';

$username = $_POST ['username'];
$password = $_POST ['password'];
$email    = $_POST ['email'];
$namalengkap = $_POST ['namalengkap'];
$alamat   = $_POST ['alamat'];

$data = mysqli_query($koneksi , "INSERT INTO users (username, password, email, namalengkap, alamat) VALUES ('$username', '$password', '$email', '$namalengkap', '$alamat')");
$cek = mysqli_affected_rows($koneksi);


if($cek > 0){
    echo "<script>
    alert('pendaftaran akun berhasil');
    location.href='../user.php';
    </script>";
}

?>