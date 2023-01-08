<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style1.css" />
    <!-- Font Awesome Cdn Link-->
    <script src="https://kit.fontawesome.com/7657a24991.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:login_mhs.php?pesan=belum_login");
    }

    ?>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="asset/download.jpg" alt="">
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a>
                        <i class="fas fa-clipboard-user"></i>
                        <span class="nav-item">Selamat Datang : <?php echo $_SESSION['username']; ?></span>
                    </a></li>
                <li><a href="tambah_data.php">
                        <i class="fas fa-user-plus"></i>
                        <span class="nav-item">Tambah Data Mahasiswa</span>
                    </a></li>
                <li><a href="list-mahasiswa.php">
                        <i class="fas fa-user-graduate"></i>
                        <span class="nav-item">List Mahasiswa</span>
                    </a></li>
                <li><a href="surat.php">
                        <i class="fas fa-mail-bulk"></i>
                        <span class="nav-item">List Pengajuan Surat</span>
                    </a></li>
                <li><a href="login-admin.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Keluar</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top"></div>

            <section>
                <div class="sofi" style="margin-top: 0.6rem; margin-left: 1rem;">
                    <p>
                    <h2>Halaman Utama</h2>
                    </p>
                </div>

                <div fxLayout="row">
                    <div fxFlex="50">
                        <div id="text1" style="margin-top: 1.4rem; margin-left: 1rem;">
                            <h3>Pengenalan Aplikasi Surat-Menyurat Berbasis web</h3>
                        </div>

                        <div id="text2" style="margin-top: 2rem; margin-left: 1rem;">
                            <p>Sistem Aplikasi Permintaan Surat-menyurat ialah sistem yang berfungsi untuk mendata </p>
                            <p>hasil permintaan surat-menyurat mahasiswa di Jurusan Teknik Informatika, serta didalam</p>
                            <p>didalam sistem ini terdapat data mahasiswa teknik informatika dan pemintaan surat dari</p>
                            <p>masing-masing mahasiswa yang bersangkutan. Karena dalam sistem ini sudah tersimpan</p>
                            <p>mahasiswa beserta perizinan yang bersangkutan dengan mahasiswa.</p>
                            <br>
                            <p>Maka untuk pengoperasiannya Mahasiswa tinggal memasukan NIM beserta password</p>
                            <p>yang di milikinya. Lalu, sistem ini hanya untuk mempermudah mahasiswa untuk melakukan</p>
                            <p>permintaan surat-menyurat dengan Tata Usaha Jurusan Teknik Informatika melalui online.</p>
                            <p>Selain itu, fitur pendataan mahasiswa di di sistem ini juga terdapat data surat dan daftar</p>
                            <p>surat yang sesuai dengan permintaan mahasiswa untuk membantu mahasiswa yang </p>
                            <p>sesuai dengan permintaan mahasiswa untuk membantu mahasiswa dalam meminta</p>
                            <p>surat-menyurat secara online.</p>
                        </div>
                    </div>

                    <div fxFlex="50">
                        <img src="asset/utama.jpg" alt="gambar" style="height: 35%; width: 35%; margin-left: 47.1rem; position: relative; top:-307px" />
                    </div>
                </div>
    </div>
</body>

</html>