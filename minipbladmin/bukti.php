<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="jenis.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title>FORMAT SURAT</title>
</head>

<body style="background: #dfe9f5">
    <div>
        <a href="surat.php"><button type="button" class="btn btn-dark btn-block">BACK</button>
        </a>
    </div>
    <span>
        <?php
        include "config.php";
        $query = $db->query("SELECT * FROM surat");
        while ($format = $query->fetch_assoc()) {
        ?> <tr>
                <td><a href="surat_izin.php"><button><?php echo "<img src='../image/" . $format['bukti_chat'] . "'width='auto'>"; ?></a></button></td>
            </tr>
        <?php
        }
        ?>
    </span>

</body>

</html>