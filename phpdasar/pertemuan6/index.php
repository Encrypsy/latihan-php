<?php

    // ARRAY ASSOCIATIVE
    //mengambil elemen atau value dengan memanggil key yang kita buat sendiri
    //index nya berupa string yang kita buat (key)
    // "key" => "value"

    $siswa = [
        [
            "nama" => "Malya",
            "umur"=> "16",
            "kelas" => "XI RPL 2",
            "nilai" => [90, 97, 84]
        ],
        [
            "nama" => "Mustika",
            "umur"=> "17",
            "kelas" => "XI RPL 1",
            "nilai" => [99, 98, 35]
        ],
        [
            "nama" => "Alya",
            "umur"=> "16",
            "kelas" => "XI MP 2",
            "nilai" => [85, 95, 100]
        ],
    ];

    // echo $myself[0], array numerik
    echo $siswa[0]["nilai"][1]; // array associative
?>