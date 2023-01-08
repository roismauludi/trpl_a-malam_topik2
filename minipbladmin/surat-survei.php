<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Survei</title>
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
    <form action="proses-kirim.php" method="POST">
        <?php
        include "config.php";
        $query = $db->query("SELECT * FROM surat");
        while ($format = $query->fetch_assoc()) {
        ?>
            <div class="container">
                <div class="col-md-10 col-md-offset-1">

                    <tr>
                        <center>
                            <br>
                            <br>
                            <table width="625">
                                <tr>
                                    <td class="text">Batam, <?php echo date('l, d-m-Y'); ?></td>
                                </tr>
                            </table>
                            <table width="625">
                                <td>
                                    <label for="nomor_surat">No &nbsp;&emsp; :</label>
                                    <?php echo $format['nomor_surat'] ?><br>
                                    <label for="lamp">Lamp &nbsp;: </label>
                                    <?php echo $format['lamp'] ?><br>
                                    <label for="perihal">Hal &nbsp;&emsp; : Surat Survei</label>
                                </td>
                            </table>
                            <br>
                            <table width="625">
                                <td>
                                    <label for="kepada">Kepada Yth, &nbsp;<br><?php echo $format['kepada'] ?></label><br>
                                    <label for="di">Di &nbsp;<br><?php echo $format['jalan'] ?></label>
                                </td>
                            </table>
                            <br>
                            <table width="625">
                                <tr>
                                    <td>
                                        <label for="kepada">Dengan Hormat, &nbsp;<br><?php echo $format['isi'] ?></label><br>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table width="625">
                                <tr>
                                    <td>
                                        Informasi berupa data yang didapat akan digunakan sebagaimana mestinya, adapun nama<br>
                                        mahasiswa/I yang kami tugaskan adalah :
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table border="1" width="625">
                                <?php
                                $no = 0;
                                include "config.php";
                                $query = $db->query("SELECT * FROM surat");
                                while ($format = $query->fetch_assoc()) {
                                    $no++
                                ?>
                                    <tr>
                                        <td align="center">No</td>
                                        <td align="center">Nim</td>
                                        <td align="center">Nama</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><?php echo $no ?></td>
                                        <td align="center"><?php echo $format['nim'] ?></td>
                                        <td align="center"><?php echo $format['nama'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                            <br>
                            <table width="625">
                                <tr>
                                    <td>
                                        Demikian disampaikan, atas perhatian dan kerjasamanya diucapkan terima kasih
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table width="625">
                                <td width="430"></td>
                                <td class="text2" align="left">Ketua jurusan<br>Teknik Informatika<br><br><br><br><br><u>Sudra Irawan, S.Pd.Si.,M.Se.</u><br>NIP : 198801082015041001</td>
                            </table>
                            </table>
                        </center>
                    </tr>
                </div>
            </div>
        <?php
        }
        ?>
    </form>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>