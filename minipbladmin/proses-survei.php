
<?php
include("config.php");

if (isset($_POST['kirim'])) {
    $ns = $_POST['nomor_surat'];
    $lamp = $_POST['lamp'];
    $hal = $_POST['hal'];

    if ($ns == "" || $lamp == "") {
        echo '<script> alert("Data tidak boleh kosong");</script>';
    } else {
        $result = "UPDATE surat SET nomor_surat ='$ns', lamp = '$lamp', hal = '$hal' ";

        $query = mysqli_query($db, $result);
    }
    if ($query) {
        echo "
             <script>
                 alert('Data berhasil ditambahkan');
                 document.location.href='surat-survei.php';
             </script>
             ";
    } else {
        echo "
        <script>
        alert('Data Berhasil Diupdate);
        document.location.href='data-survei.php';
    </script>
             ";
    }
}
