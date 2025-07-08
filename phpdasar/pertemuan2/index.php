<?php

// PHP Dasar - Sintaks PHP

// Standar Output
// echo, print (sama aja)
// print_r("") (mencetak isi array)
// var_dump (melihat isi dari variabel, menampilkan tipe data dan panjang string)



// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

//penulisan variabel di PHP
//- tidak boleh diawali dengan angka
$nama = "Malya pacar Karina dan Winter (IT IS A FACT)";
$paragraf = "ini paragraf";

//penulisan operator di PHP
$angka1 = 10;
$angka2 = 20;

$tambah = $angka1 + $angka2;

//penulisan penggabungan string / concatenation / concat
// .


// Operator penugasan (assignment)
// +, +=, -=, *=, /=, %=, .=

$x = 1;
$x+=4; //($x = $x + 4)

$nama = "Malya";
$nama .= " "; // ($nama = $nama . " ")
$nama .= "Maritza"; // ($nama = $nama . "Maritza")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icons" href="">
</head>
<body>
    <h1>selamat datang <?php echo $nama; ?></h1>
    <p>
        <?php echo $paragraf ?>
    </p>
    <p>
        <?php echo "btw $angka1 + $angka2 berapa ya? jelas $tambah laaah"; ?>
    </p>
    <p>
        <?php echo $x; ?>
    </p>
</body>
</html>