<?php
include("config.php");

if (isset($_POST['kirim'])) {
    $mhs = $_POST['nama_mhs'];
    $wali = $_POST['nama_wali'];

    $result1 = "INSERT INTO hasil_surat (nama_mhs, nama_wali)
                     VALUE ('$mhs', '$wali')";

    $query = mysqli_query($db, $result1);

    if ($query) {
        echo "
                         <script>
                             alert('Nama berhasil diinput');
                             document.location.href='surat-izin.php';
                         </script>
                         ";
    } else {
        echo "
                         <script>
                             alert('Nama gagal diinput');
                             document.location.href='data-izin.php';
                         </script>
                         ";
    }
}
