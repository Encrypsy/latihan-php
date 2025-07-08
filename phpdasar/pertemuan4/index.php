<?php
    //FUNCTION
    /*
        - built-in function (fungsi bawaan php)
            - date/tim (waktu)
                - time()
                - date()
                - mktime()
                - strtotime()
        - user-defined function (fungsi bikin sendiri)
    */

    /* 
        FUNCTION DATE()
        l = hari
        d = tanggal
        M = bulan (nama)
        m = bulan (angka)
        Y = tahun (ex: 2025)
        y = tahun (ex: 25)

        FUNCTION TIME()
        - time() : UNIX timestamp / EPOCH time: rentang waktu dalam dunia IT (mulai pada 1 Januari 1970)

        FUNCTION MKTIME()
        - mktime() : 6 parameter (jam, menit, detik, bulan, tanggal, tahun), membuat detik sendiri berdasarkan parameter tanggal

        FUNCTION STRTOTIME()
        - mengubah parameter string menjadi time (rentan detik)
    */


    $tanggal_hariini = date("l, d-M-Y");

    echo "File ini dibuat pada: ";
    echo "$tanggal_hariini <br><br>";


    $rentandetik_akulahir = mktime(0,0,0,2,7,2009);
    $harilahir = date("l", $rentandetik_akulahir);

    /*
        FUNCTION STRING:
        - strlen(), menghitung panjang string
        - strcmp(), membandingkan 2 string
        - explode(), memecah string menjadi array
        - htmlspecialchars()
    */

    /*
        var_dump, fungsi untuk mencetak isi dari variabel
        isset(), mengecek apakah variabelnya sudah dibikin apa belum
        empty(), apakah variabel yang tersedia memiliki value atau tidak
        die(), memberhentikan program
        sleep(), memberhentikan sementara
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>selamat datang</h1>
    <p>
        <?php 
            echo "kamu lahir di hari $harilahir <br>";      
        ?>
    </p>
</body>
</html>