<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM SURAT</title>
    <link rel="stylesheet" href="izin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>

<body>
    <?php
    include "config.php";

    $query = $db->query("SELECT * FROM mahasiswa");
    while ($result = $query->fetch_assoc()) {
    ?>
        <div class="registerBox">
            <h3>Biodata Mahasiswa</h3>
            <form action="proses-izin.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="nim" value="<?php echo $result['nim'] ?>">
                <input type="hidden" name="nama" value="<?php echo $result['nama'] ?>">
                <input type="hidden" name="kelas" value="<?php echo $result['kelas'] ?>">
                <input type="hidden" name="prodi" value="<?php echo $result['prodi'] ?>">
                <label for="matkul" style="color: white; font-weight: bold;">Mata Kuliah :</label>
                <input type="text" name="matkul" id="matkul" placeholder="Mata Kuliah">
                <label for="dosen" style="color: white; font-weight: bold;">Nama Dosen :</label>
                <input type="text" name="dosen" id="dosen" placeholder="Nama Dosen">
                <label for="sesi" style="color: white; font-weight: bold;">jumlah Sesi :</label>
                <input type="text" name="sesi" id="sesi" placeholder="Jumlah Sesi">
                <label style="color: white; font-weight: bold;">Jenis Surat</label><br>
                <select name="jenis_surat" id="jenis_surat">
                    <option value="">Jenis Surat</option>
                    <option value="surat izin">Surat Izin</option>
                </select><br>
                <label for="mulai" style="color: white; font-weight: bold;">Mulai Izin</label>
                <input type="date" name="mulai" id="mulai">
                <label for="sampai" style="color: white; font-weight: bold;">Sampai Dengan</label>
                <input type="date" name="sampai" id="sampai">
                <label for="bukti_chat" style="color: white; font-weight: bold;">Bukti Chat Dosen</label>
                <input type="file" name="bukti_chat" id="bukti_chat">

                <td></td>
                <input type="submit" name="kirim" value="Send" maxlength="5">
                <a href="index.php" class="btn btn-primary btn-md">Kembali</a>
                </tr>
            </form>
        </div>
        </div>
    <?php
    }
    ?>
</body>

</html>