<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM SURAT</title>
    <link rel="stylesheet" href="survei.css">
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
            <h3>Surat Survei</h3>
            <form action="proses-survei.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="nim" value="<?php echo $result['nim'] ?>">
                <input type="hidden" name="nama" value="<?php echo $result['nama'] ?>">
                <input type="hidden" name="kelas" value="<?php echo $result['kelas'] ?>">
                <input type="hidden" name="prodi" value="<?php echo $result['prodi'] ?>">
                <label style="color: white; font-weight: bold;">Jenis Surat</label><br>
                <select name="jenis_surat" id="jenis_surat">
                    <option value="">Jenis Surat</option>
                    <option value="surat survei">Surat Survei</option>
                </select><br>
                <label for="kepada" style="color: white; font-weight: bold;">Kepada Yth :</label>
                <input type="text" name="kepada" id="kepada" placeholder="Tujuan">
                <label for="jalan" style="color: white; font-weight: bold;">Alamat :</label>
                <input type="text" name="jalan" id="jalan" placeholder="Alamat tujuan">
                <label for="isi" style="color: white; font-weight: bold;">Isi Surat :</label>
                <textarea name="isi" id="isi" cols="30" rows="5"></textarea>
                <label for="perihal" style="color: white; font-weight: bold;">Lokasi Dan Tanggal Kejadian :</label>
                <input type="text" name="perihal" id="perihal" placeholder="Lokasi dan Tanggal Kejadian">

                <td></td>
                <input type="submit" name="kirim" value="Send" maxlength="5">
                <a href="format-survey.php" class="btn btn-primary btn-md">Kembali</a>
                </tr>
            </form>
        </div>
        </div>
    <?php
    }
    ?>
</body>

</html>