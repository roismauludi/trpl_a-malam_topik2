<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:login_admin.php?pesan=belum_login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="surattt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7657a24991.js" crossorigin="anonymous"></script>
    <title>SURAT</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="#" class="logo">
                    <img src="asset/download.jpg" alt="">
                    <span class="nav-item">FORM SURAT</span>
                </a></li>
            <li><a>
                    <i class="fas fa-clipboard-user"></i>
                    <span class="nav-item">Admin : <?php echo $_SESSION['username']; ?>
                </a></li>
            <li><a href="index.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Kembali</span>
                </a></li>
        </ul>
    </nav>
    <div class="container">
        <section class="main">
            <div class="main-top">
            </div>
            <section class="attendance">
                <div class="attendance-list">
                    <h2>IF MAIL</h2>
                    <p><i><b>Note :</b> Data Surat Dihapus Dalam 1 x 24 Jam</i></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>jenis surat</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th align="center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody <?php
                                include "config.php";
                                $no = 0;
                                $query    = mysqli_query($db, "SELECT * FROM surat ORDER BY nim DESC");
                                while ($format    = mysqli_fetch_array($query)) {
                                    $no++
                                ?> <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $format['nim'] ?></td>
                            <td><?php echo $format['nama'] ?></td>
                            <td><?php echo $format['jenis_surat'] ?></td>
                            <td><?php echo $format['created_at'] ?></td>
                            <td>
                                <select name="status" id="status">
                                    <option value="diproses">Diproses</option>
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                </select>
                            </td>
                            <td align="center">
                                <button><a href="konfirm.php?nim=<?= $format['nim'] ?>" class="btn btn-info">DETAIL</a></button><br>
                                <button><a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus.php?nim=<?php echo $format['nim'] ?>" class="btn btn-danger">HAPUS</a></button>
                            </td>
                            </tr>
                        <?php
                                }
                        ?>
                        </tbody>
                    </table>
                    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
                </div>
                </selecet>
                </select>
    </div>

</body>

</html>