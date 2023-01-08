<?php
include("config.php");

if (isset($_POST['kirim'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $mk = $_POST['matkul'];
    $dosen = $_POST['dosen'];
    $sesi = $_POST['sesi'];
    $js = $_POST['jenis_surat'];
    $mulai = $_POST['mulai'];
    $sampai = $_POST['sampai'];

    $bukti = $_FILES['bukti_chat']['name'];
    $ukuran_file = $_FILES['bukti_chat']['size'];
    $x = explode('.', $bukti);
    $ekstensi = strtolower(end($x));
    $ekstensi_diperbolehkan = array('jpg', 'png');
    $tmp_file = $_FILES['bukti_chat']['tmp_name'];
    $path = "../image/" . $bukti;


    if (in_array($ekstensi, $ekstensi_diperbolehkan) ===  true) {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, "$path")) {
            }
            if ($mk == "" || $dosen == "" || $sesi == "" || $js == "" || $mulai == "" || $sampai == "" || $path = "") {
                echo '<script> alert("Data tidak boleh kosong");</script>';
            } else {
                $result1 = "INSERT INTO surat (nim, nama, kelas, prodi, matkul, dosen, sesi, jenis_surat, mulai, sampai, bukti_chat)
                     VALUE ('$nim', '$nama', '$kelas', '$prodi', '$mk', '$dosen', '$sesi', '$js', '$mulai', '$sampai', '$path')";

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
                             document.location.href='biodata.php';
                         </script>
                         ";
                }
            }
        }
    }
}
