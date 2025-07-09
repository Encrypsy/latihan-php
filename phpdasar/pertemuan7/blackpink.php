<?php

    $girlgroups = [
        [ // > AESPA
            "nama" => "aespa",
            "agensi" => "SM entertainment",
            "tanggal debut" => "17 november 2020",
            "lagu debut" => "black mamba",
            "jumlah anggota" => 4,
            "anggota" => ['karina', 'giselle', 'winter', 'ningning'],
            "fandom" => "MY",
            "logo" => "aespa.jpg"
        ],
        [ // > KATSEYE
            "nama" => "katseye",
            "agensi" => "HYBE x Geffen Records",
            "tanggal debut" => "16 agustus 2024",
            "lagu debut" => "debut",
            "jumlah anggota" => 6,
            "anggota" => ['daniela', 'sophia', 'lara', 'manon', 'megan', 'yoonchae'],
            "fandom" => "eyekons",
            "logo" => "katseye.jpg"
        ],
        [ // > TWICE
            "nama" => "twice",
            "agensi" => "JYP entertainment",
            "tanggal debut" => "20 oktober 2015",
            "lagu debut" => "like ooh-aah",
            "jumlah anggota" => 9,
            "anggota" => ['nayeon', 'jeongyeon', 'momo', 'sana', 'jihyo', 'mina', 'dahyun', 'chaeyeong', 'tzuyu'],
            "fandom" => "ONCE",
            "logo" => "twice.jpg"
        ],
        [ // > IZONE
            "nama" => "izone",
            "agensi" => "Off the Record Entertainment",
            "tanggal debut" => "29 oktober 2018",
            "lagu debut" => "la vien en rose",
            "jumlah anggota" => 12,
            "anggota" => ['eunbi', 'sakura','hyewon', 'yena', 'chaeyeon', 'chaewon', 'minju', 'nako', 'hitomi', 'yuri', 'yujin', 'wonyoung'],
            "fandom" => "WIZONE",
            "logo" => "izone.jpg"
        ],
        [ // > BLACKPINK
            "nama" => "blackpink",
            "agensi" => "YG entertainment",
            "tanggal debut" => "8 agustus 2016",
            "lagu debut" => "boombayah",
            "jumlah anggota" => 4,
            "anggota" => ['jisoo', 'jennie', 'rose', 'lisa'],
            "fandom" => "BLINK",
            "logo" => "blackpink.jpg"
        ],
        [ // > RED VELVET
            "nama" => "red velvet",
            "agensi" => "SM entertainment",
            "tanggal debut" => "8 agustus 2014",
            "lagu debut" => "happiness",
            "jumlah anggota" => 5,
            "anggota" => ['irene', 'seulgi', 'joy', 'wendy', 'yeri'],
            "fandom" => "REVELUV",
            "logo" => "redvelvet.jpg"
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: arial;
        }

        .container-judul {
            display: flex;
            justify-content: center;
        }

        .container-img {
            display: flex;
            justify-content: center;
        }

        .container-content {
            display: flex;
            justify-content: center;
            /* background-color: aqua; */
            padding: 30px;
            width: fit-content;
        }

        .content {
            display: flex;
            justify-content: center;
        }

        img {
            border-radius: 10px;
            transition-duration: 0.5s;
            transition-timing-function: ease;
            transition-delay: 0s;
        }

        img:hover {
            transform: scale(1.07);
            filter: drop-shadow(15px 15px 20px #471396);
        }

        li {
            margin-bottom: 10px;
            list-style: none;
        }

        .content-end {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        a {
            text-decoration: none;
        }

        button {
            width: 200px;
            padding: 20px;
            border-radius: 10px;
            border: none;
            background-color: white;
            border: 2px solid #471396;
            color: #471396;
            transition-duration: 0.7s;
            transition-timing-function: ease;
        }
        
        button:hover {
            color: white;
            background-color: #471396;
            filter: drop-shadow(5px 5px 10px #471396);
        }
    </style>
</head>
<body>

        <?php
            $aespa = $girlgroups[0];
        ?>

        <div class="container">
            <div class="container-judul">
                <h2>BLACKPINK PAGE</h2>
            </div>
            <div class="content">
                <div class="container-content">
                    <div class="container-img">
                        <img src="../image/<?=$_GET["logo"];?>" width="200px">
                    </div>
                    <div class="container-informasi">
                        <ul>
                           <li>
                                <?= "Nama: ", $_GET["nama"];?>
                           </li>
                           <li>
                                <?= "Tanggal debut: ", $_GET["tanggaldebut"];?>
                           </li>
                           <li>
                                <?= "Lagu debut: ", $_GET["lagudebut"];?>
                           </li>
                           <li>
                                <?= "Fandom: ", $_GET["fandom"];?>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-end">
                <div class="content-end-button">
                    <a href="index.php">
                        <button>
                            Kembali
                        </button>
                    </a>
                </div>
            </div>
        </div>
    
</body>
</html>