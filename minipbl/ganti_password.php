<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link rel="stylesheet" href="style1.css" />
    <!-- Font Awesome Cdn Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
                        <img src="download.jpg" alt="">
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a>
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Selamat Datang : <?php echo $_SESSION['username']; ?></span>
                    </a></li>
                <li><a href="index.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Kembali</span>
                    </a></li>
            </ul>
        </nav>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "oke") {
                echo "<div class='alert alert-success'>Password telah diganti!</div>";
            }
        }
        ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Password</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="ganti_aksi.php">
                    <div class="form-group">
                        <label>Masukkan Password Baru</label>
                        <input type="password" class="formcontrol" name="password_baru" placeholder="Masukkan Password Baru Anda ..">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-succes" value="Ganti Password">
                </form>
            </div>
        </div>
    </div>
</body>

</html>