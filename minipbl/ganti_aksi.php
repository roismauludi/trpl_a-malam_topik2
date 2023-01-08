<?php
// menghubungkan dengan koneksi
include 'config.php';
// menangkap data yang dikirim dari form
$password_baru = md5($_POST['password_baru']);
// fungsi md5 di atas untuk enkripsi kedalam bentuk md5
// mengupdate data password pada table admin
mysqli_query($db, "update mahasiswa set password='$password_baru'");
header("location:ganti_password.php?pesan=oke");
