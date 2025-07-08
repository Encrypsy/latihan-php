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
    */


    $tanggal_hariini = date("l, d-M-Y");

    echo "File ini dibuat pada: ";
    echo "$tanggal_hariini <br><br>";

    /*
        FUNCTION TIME()
        - time() : UNIX timestamp / EPOCH time: rentang waktu dalam dunia IT (mulai pada 1 Januari 1970)
    */

    //kalo sekarang selasa, 3 hari lagi ...

    $hari_sekarang = date('l'); //tuesday
    $rentan_hari = 2;
    $hari_kedepan = date('l', time() + 60*60*24*$rentan_hari); //menghitung hari kedepan 
    $hari_kebelakang = date('l', time() - 60*60*24*$rentan_hari); //menghitung hari kebelakang

    switch ($hari_sekarang) {
        case 'Monday':
            $hari = 'senin';
            break;

        case 'Tuesday':
            $hari = 'selasa';
            break;

        case 'Wenesday':
            $hari = 'rabu';
            break;

        case 'Thursday':
            $hari = 'kamis';
            break;

        case 'Friday':
            $hari = 'jumat';
            break;

        case 'Saturday':
            $hari = 'sabtu';
            break;

        case 'Sunday':
            $hari = 'minggu';
            break;
        
        default:
            # code...
            break;
    }

    switch ($hari_kedepan) {
        case 'Monday':
            $harikedepan = 'senin';
            break;

        case 'Tuesday':
            $harikedepan = 'selasa';
            break;

        case 'Wednesday':
            $harikedepan = 'rabu';
            break;

        case 'Thursday':
            $harikedepan = 'kamis';
            break;

        case 'Friday':
            $harikedepan = 'jumat';
            break;

        case 'Saturday':
            $harikedepan = 'sabtu';
            break;

        case 'Sunday':
            $harikedepan = 'minggu';
            break;
        
        default:
            # code...
            break;
    }

    switch ($hari_kebelakang) {
        case 'Monday':
            $harikebelakang = 'senin';
            break;

        case 'Tuesday':
            $harikebelakang = 'selasa';
            break;

        case 'Wednesday':
            $harikebelakang = 'rabu';
            break;

        case 'Thursday':
            $harikebelakang = 'kamis';
            break;

        case 'Friday':
            $harikebelakang = 'jumat';
            break;

        case 'Saturday':
            $harikebelakang = 'sabtu';
            break;

        case 'Sunday':
            $harikebelakang = 'minggu';
            break;
        
        default:
            # code...
            break;
    }

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
        <?php if($rentan_hari === 1): ?>
            <p>
                <?= "sekarang $hari besok $harikedepan kalo kemaren $harikebelakang"; ?>
            </p>
        <?php elseif($rentan_hari === 2): ?>
            <p>
                <?= "sekarang $hari, lusanya hari $harikedepan, 2 hari sebelumnya $harikebelakang"; ?>
            </p>
        <?php else: ?>
            <p>
                <?= "kalo sekarang $hari, $rentan_hari hari kedepan $harikedepan, $rentan_hari hari yang lalu $harikebelakang"?>
            </p>
        <?php endif; ?>
    </p>
</body>
</html>