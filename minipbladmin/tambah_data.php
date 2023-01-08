<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="mhs.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <div class="box">
        <form action="proses-tambah-data.php" method="POST">
            <div class="form">
                <h2>FORM TAMBAH DATA MAHASISWA</h2>
                <div class="inputBox">
                    <input type="text" name="nim" id="nim" required="required">
                    <span>NIM</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="username" id="username" required="required">
                    <span>UserName</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="nama" id="nama" required="required">
                    <span>Nama</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="jurusan" id="jurusan" required="required">
                    <span>Jurusan</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="prodi" id="prodi" required="required">
                    <span>Program Studi</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="kelas" id="kelas" required="required">
                    <span>Kelas - Reguler</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="">Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="inputBox">
                    <select name="level" id="level">
                        <option value="">Level User</option>
                        <option value="mahasiswa">Mahasiswa</option>
                    </select>
                </div>
                <br>
                <input type="submit" class="btn btn-success" name="submit" value="TAMBAH DATA"><br>
                <a href="index.php" class="btn btn-primary btn-md">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>