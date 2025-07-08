<?php

    // USER DEFINED FUNCTION
    // fungsi buatan sendiri


    function sambutan($waktu='datang') {
        return "Selamat $waktu";
    }

    function user($nama='User') {
        return "$nama!";
    }

    $spasi = " ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>
        <?php
            echo sambutan('pagi') . $spasi . user();
        ?>
    </h1>
</body>
</html>