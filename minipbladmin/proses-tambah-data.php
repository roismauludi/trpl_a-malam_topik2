
<?php
include("config.php");
//memeriksa tombol daftar sudah di klik atau belum
if (isset($_POST['submit'])) {
    //mengambil data dari formulir
    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $js = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];
    $jk = $_POST['jenis_kelamin'];
    $lv = $_POST['level'];

    //membuat query
    if ($nim == "" || $username == "" || $nama == "" || $js == "" || $prodi == "" || $kelas == "" || $password == "" || $jk == "" || $lv == "") {
        echo "<script> alert('Data tidak boleh kosong');
        document.location.href='tambah_data.php';
        </script>
        </script>";
    } else {
        $result = "INSERT INTO mahasiswa (nim, username, nama, jurusan, prodi, kelas, password, jenis_kelamin, level)
             VALUE ('$nim', '$username', '$nama', '$js', '$prodi', '$kelas', '$password','$jk', '$lv')";

        $query = mysqli_query($db, $result);
    }
    //apakah query simpan berhasil?
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
                document.location.href='tambah_data.php';
            </script>
        ";
    }
} else {
    die("Akses dilarang...");
}
