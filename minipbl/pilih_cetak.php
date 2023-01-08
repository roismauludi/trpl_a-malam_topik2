<!DOCTYPE html>
<html>

<head>
    <style>
    /* Style for the options container */
    .options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0;
    }

    /* Style for the links */
    a {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 20px;
        font-size: 22px;
        text-decoration: none;
        color: #000;
        cursor: pointer;
    }

    /* Style for the link's span element */
    a span {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* Style for the link's span element when it's clicked */
    a.selected span {
        background-color: #f1f1f1;
    }

    /* Style for the link's span element when it's clicked */
    a.selected span:after {
        content: "";
        position: absolute;
        display: block;
    }

    /* Style for the circle inside the span element */
    a span:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
    </style>
</head>

<body style="background-color: cyan;">
    <h2>Pilih jenis surat yang ingin anda cetak</h2>
    <form>
        <!-- Option 1 -->
        <div class="options">
            <a href="cetak_izin.php" class="selected"><span></span>IZIN</a>
        </div>

        <!-- Option 2 -->
        <div class="options">
            <a href="cetak_survei.php"><span></span>SURVEY</a>
        </div>
    </form>
    <a href="jenis-surat.php">kembali</a>
</body>

</html>