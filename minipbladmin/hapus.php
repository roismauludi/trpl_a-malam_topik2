<?php
include "config.php";
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
    mysqli_query($db, $query);

    if (mysqli_affected_rows($db) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href='list-mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href='list-mahasiswa.php';
            </script>
        ";
    }
}
