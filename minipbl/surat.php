<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Izin</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<style>
    table tr td {
        font-size: 13px;
    }

    table tr .text {
        text-align: right;
        font-size: 13px;
    }
</style>

<body>
    <?php
    include "config.php";
    $query = $db->query("SELECT * FROM surat");
    while ($format = $query->fetch_assoc()) {
    ?>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">

                <tr>
                    <center>
                <tr>
                    <table width="625">
                        <td align="center"><img src="logo.jpg" width="90" height="90"></td>
                        <td>
                            <center>
                                <font size="5"><U>SURAT IZIN PERKULIAHAN</U></font><br>
                            </center>
                        </td>
                </tr>
                <tr coldspan="2">
                    <hr>
                </tr>
                </table>
                <table width="625">
                    <tr>
                        <td class="text">Batam, <?php echo date('l, d-m-Y'); ?><br>Yth, Bapak / Ibu Dosen Dan TU IF Reguler Pagi / Malam
                        </td>
                    </tr>
                </table>
                <br>
                <table width="625">
                    <tr>
                        <td>Dengan Hormat.</td>
                        <td width="375"></td>
                    </tr>
                    <tr>
                        <td>Saya yang bertanda tangan dibawah ini</td>
                        <td width="375"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td width="375"> :<?php echo $format['nama'] ?></td>

                    </tr>
                    <tr>
                        <td>Nim</td>
                        <td width="375"> :<?php echo $format['nim'] ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td width="375"> :<?php echo $format['prodi'] ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td width="375"> :<?php echo $format['kelas'] ?></td>
                    </tr>
                    </tr>
                </table>
                <br>
                <table width="625">
                    <tr>
                        <td>
                            <font size="2">Dengan surat ini meminta permohonan izin perkuliahan dikarenakan tidak dapat mengikuti<br>
                                perkuliahan dikarenakan Sakit / Urusan Keluarga / Lembur dan melampirkan surat <b>bukti (Surat MC / Surat<br>
                                    Perintah Lembur / Bukti Lainnya)</b> dan juga mengupload bukti chat bahwa sudah melakukan izin ke Dosen Wali</font>
                        </td>
                    </tr>
                </table>
                <br>
                <table border="1" width="625">
                    <?php
                    include "config.php";
                    $query = $db->query("SELECT * FROM surat");
                    while ($format = $query->fetch_assoc()) {
                    ?>
                        <tr>
                            <td align="center">Hari & Tanggal</td>
                            <td align="center">Mata Kuliah</td>
                            <td align="center">Nama Dosen</td>
                            <td align="center">Jumlah Sesi</td>
                        </tr>
                        <tr>
                            <td align="center"><?php echo $format['mulai'] ?></td>
                            <td align="center"><?php echo $format['matkul'] ?></td>
                            <td align="center"><?php echo $format['dosen'] ?></td>
                            <td align="center"><?php echo $format['sesi'] ?></td>
                        </tr>
                        <tr>
                            <td align="center"><?php echo $format['sampai'] ?></td>
                            <td align="center"><?php echo $format['matkul'] ?></td>
                            <td align="center"><?php echo $format['dosen'] ?></td>
                            <td align="center"><?php echo $format['sesi'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <br>
                <table width="625">
                    <tr>
                        <td>Demikian surat izin ini saya buat dengan sebenarnya, atas perhatian dan pengertiannya saya
                            ucapkan terimakasih.</td>
                    </tr>
                    <br>
                    <?php
                    include "config.php";
                    $query = $db->query("SELECT * FROM hasil_surat");
                    while ($format = $query->fetch_assoc()) {
                    ?>
                        <table width="625">
                            <td></td>
                            <td class="text2" align="left">Mengetahui<br><br><br><br><br><?php echo $format['nama_wali'] ?><br>Orang Tua / Wali</td>
                            <td width="430"></td>
                            <td class="text2" align="center">Hormat saya<br><br><br><br><br><?php echo $format['nama_mhs'] ?><br>Mahasiswa</td>
                        </table>
                    <?php
                    }
                    ?>
                    <br>
                    <table width="625">
                        <tr>
                            <td>Catatan :<br>
                                1. Surat izin diserahkan paling lambat 5 hari kerja setelah ketidakhadiran<br>
                                2. Surat izin tidak sesuai format, tidak akan diproses<br>
                                3. komplain surat dapat dilakukan 5 hari kerja setelah surat diupload pada form
                            </td>
                        </tr>
                    </table>
                </table>
                </center>
            </div>
        </div>
    <?php
    }
    ?>
    <script type="text/javascript">
        window.print();
    </script>
</body>