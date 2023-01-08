<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:index.php");

        // cek jika user login sebagai mahasiswa
    } else if ($data['level'] == "mahasiswa") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "mahasiswa";
        // alihkan ke halaman dashboard mahasiswa
        header("location:pbl/minipbl/login_mhs.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:login_mhs.php?pesan=gagal");
    }
} else {
    header("location:login-admin.php?pesan=gagal");
}
