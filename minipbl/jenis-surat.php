<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "login") {
    header("location:login.php?pesan=belum_login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jenis-surat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
    <title>SURAT</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="#" class="logo">
                    <img src="download.jpg" alt="">
                    <span class="nav-item">FORM SURAT</span>
                </a></li>
            <li><a>
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Mahasiswa : <?php echo $_SESSION['username']; ?>
                </a></li>
            <li><a href="pilih_cetak.php">
                    <i class="fas fa-mail-bulk"></i>
                    <span class="nav-item">History cetak</span>
                </a></li>
            <li><a href="index.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Kembali</span>
                </a></li>
        </ul>
    </nav>
    <div class="container">
        <section>
            <h1 style="margin-top: 2rem; margin-bottom: 3rem"><b>JENIS SURAT</b></h1>
            <p><i><b>Note :</b> Data Mahasiswa Akan Dihapus 24jam Setelah Mengajukan Surat!</i></p>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">

                        <h1>SURAT SURVEY</h1>
                        <p>surat yang diperuntukkan untuk mahasiswa</p>
                        <p>semester akhir untuk melakukan survey</p>
                    </div>
                    <div class="flip-card-back">
                        <img src="assets/surat-survey.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                </div>
            </div>
            <a href="format-survey.php">
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Read more</span>
                </button>
            </a>
            <div class="flip-card" style="margin-left: 20rem; margin-top: -23rem">
                <div class="flip-card-inner">
                    <div class="flip-card-front">

                        <h1><b>SURAT IZIN</b></h1>
                        <p>Surat ini diperuntukkan untuk Mahasiswa</p>
                        <p>Yang ingin izin sesuai dengan kebutuhannya</p>
                    </div>
                    <div class="flip-card-back">
                        <img src="assets/surat-izin.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                </div>
                <a href="format-izin.php">
                    <button class="learn-more">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read more</span>
                    </button>
                </a>
            </div>
            <!-- <div class="flip-card" style="margin-left: 40rem; margin-top: -18.8rem">
                <div class="flip-card-inner">
                    <div class="flip-card-front">

                        <h1><b>SURAT PEMANGGILAN</b></h1>
                        <p>Surat yang berisi informasi agar pihak yang tertera namanya</p>
                        <p>diminta untuk memenuhi panggilan pihak yang memanggil</p>
                    </div>
                    <div class="flip-card-back">
                        <img src="assets/surat-pemanggilan.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                </div>
            </div>
            <a href="format-pemanggilan.php" style="margin-left: 40rem">
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Read more</span>
                </button>
            </a> -->
        </section>
    </div>
</body>

</html>