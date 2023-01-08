<?php
include("config.php");

if (isset($_POST['kirim'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $js = $_POST['jenis_surat'];
    $kepada = $_POST['kepada'];
    $jalan = $_POST['jalan'];
    $isi = $_POST['isi'];
    $perihal = $_POST['perihal'];

    if ($js == "" || $kepada == "" || $jalan == "" || $isi == "" || $perihal == "") {
        echo '<script> alert("Data tidak boleh kosong");</script>';
    } else {
        $result = "INSERT INTO surat (nim, nama, kelas, prodi, jenis_surat, kepada, jalan, isi, perihal)
             VALUE ('$nim', '$nama', '$kelas', '$prodi', '$js', '$kepada', '$jalan', '$isi', '$perihal')";

        $query = mysqli_query($db, $result);
    }
    if ($query) {
        echo "
             <script>
                 alert('Data berhasil ditambahkan');
                 document.location.href='index.php';
             </script>
             ";
    } else {
        echo "
             <script>
                 alert('Data gagal ditambahkan');
                 document.location.href='survei.php';
             </script>
             ";
    }
}
