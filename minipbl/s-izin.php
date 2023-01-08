<?php
include("config.php");

if (isset($_POST['kirim'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $js = $_POST['jenis_surat'];

    $result1 = "INSERT INTO surat (nim, nama, kelas, prodi, jenis_surat)
             VALUE ('$nim', '$nama', '$kelas', '$prodi', '$js')";

    $query = mysqli_query($db, $result1);

    if ($query) {
        echo "
                 <script>
                     alert('Data berhasil dikirim');
                     document.location.href='index.php';
                 </script>
                 ";
    } else {
        echo "
                 <script>
                     alert('Data gagal dikirim');
                     document.location.href='izin.php';
                 </script>
                 ";
    }
}
