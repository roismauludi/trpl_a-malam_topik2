<?php
if (isset($_GET['nim'])) {
    $nim    = $_GET['nim'];
} else {
    die("Error. No NIM Selected!");
}
include "config.php";
$query    = mysqli_query($db, "SELECT * FROM surat WHERE nim='$nim'");
$result    = mysqli_fetch_array($query);
?>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="konfirm.css">
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
                    <h2>DETAIL MAHASISWA</h2>
                    <p><i>Note: Dibawah ini adalah detail informasi mahasiswa berdasarkan nim</i> <b><?php echo $nim ?></b></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>JURUSAN</th>
                                <th>PROGRAM STUDI</th>
                                <th>KELAS</th>
                                <th>JENIS KELAMIN</th>
                            </tr>
                        </thead>
                        <tbody <?php
                                include "config.php";
                                $query = $db->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
                                while ($result = $query->fetch_assoc()) {
                                ?> <tr>
                            <td><b> <?php echo $result['nim'] ?></b></td>
                            <td><?php echo $result['nama'] ?></td>
                            <td><?php echo $result['jurusan'] ?></td>
                            <td><?php echo $result['prodi'] ?></td>
                            <td><?php echo $result['kelas'] ?></td>
                            <td><?php echo $result['jenis_kelamin'] ?></td>

                            <td align="center">


                            </td>
                            </tr>
                        <?php
                                }
                        ?>
                        </tbody>
                    </table>
                    <p><b><i>Data Surat izin</i></b></p>
                    <table class="table">
                        <?php
                        include "config.php";

                        $query = $db->query("SELECT * FROM surat WHERE nim='$nim'");
                        while ($data = $query->fetch_assoc()) {
                        ?>
                            <tr>
                                <td>MATA KULIAH</td>
                                <td>: <?php echo $data['matkul'] ?></td>
                            </tr>
                            <tr>
                                <td>DOSEN</td>
                                <td>: <?php echo $data['dosen'] ?></td>
                            </tr>
                            <tr>
                                <td>JUMLAH SESI</td>
                                <td>: <?php echo $data['sesi'] ?></td>
                            </tr>
                            <tr>
                                <td>BUKTI CHAT</td>
                                <td align="left"><a href="bukti.php"><?php echo "<img src='../image/" . $data['bukti_chat'] . "'width='100'>"; ?></a></td>
                            </tr>
                            <tr>
                                <td>MULAI IZIN</td>
                                <td><?php echo $data['mulai'] ?></td>
                            </tr>
                            <tr>
                                <td>SAMPAI DENGAN</td>
                                <td><?php echo $data['sampai'] ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="data-izin.php?nim=<?php echo $nim; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK SURAT IZIN</a><br>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </table>
                    <p><b><i>Data Surat Survei</i></b></p>
                    <table class="table">
                        <?php
                        include "config.php";

                        $query = $db->query("SELECT * FROM surat WHERE nim='$nim'");
                        while ($data = $query->fetch_assoc()) {
                        ?>
                            <tr>
                                <td>KEPADA</td>
                                <td>: <?php echo $data['kepada'] ?></td>
                            </tr>
                            <tr>
                                <td>JALAN</td>
                                <td>: <?php echo $data['jalan'] ?></td>
                            </tr>
                            <tr>
                                <td>ISI SURAT</td>
                                <td>: <?php echo $data['isi'] ?></td>
                            </tr>
                            <tr>
                                <td>LOKASI DAN TANGGAL KEJADIAN</td>
                                <td>: <?php echo $data['perihal'] ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <br><a href="data-survei.php?nim=<?php echo $nim; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK SURAT SURVEI</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <tr height="40">
                        <td>

                            <a href="surat.php" class="btn btn-primary btn-md">Kembali</a>
                        </td>

                    </tr>
                </div>
                </selecet>
                </select>
    </div>

</body>

</html>