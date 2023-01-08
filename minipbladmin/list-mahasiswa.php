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
    <link rel="stylesheet" href="surattt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7657a24991.js" crossorigin="anonymous"></script>
    <title>LIST - MAHASISWA</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="#" class="logo">
                    <img src="asset/download.jpg" alt="">
                    <span class="nav-item">LIST MAHASISWA</span>
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
                    <h2>LIST MAHASISWA</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jurusan</th>
                                <th>Program Studi</th>
                                <th>Kelas - Reguler</th>
                                <th>Jenis Kelamin</th>
                                <th align="center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody><?php
                                include "config.php";
                                $no = 0;
                                $query    = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY nim DESC");
                                while ($data    = mysqli_fetch_array($query)) {
                                    $no++
                                ?> <tr>
                                    <td><?php echo $no ?></td>
                                    <td><b> <?php echo $data['nim'] ?></b></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['jurusan'] ?></td>
                                    <td><?php echo $data['prodi'] ?></td>
                                    <td><?php echo $data['kelas'] ?></td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>

                                    <td align="center">

                                        <button><a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus.php?nim=<?php echo $data['nim'] ?>" class="btn btn-danger">HAPUS</a></button>
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