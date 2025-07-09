<?php
    //variabel scope (lingkup variabel)
    //variabel superglobals (variabel yg dimilik oleh PHP)

    /*
        SUPERGLOBALS:
        - $_GET
        - $_POST
        - $_REQUEST
        - $_SESSION
        - $_COOKIE
        - $_SERVER
        - $_ENV
    */

    $girlgroups = [
        [ // > AESPA
            "nama" => "aespa",
            "agensi" => "SM entertainment",
            "tanggaldebut" => "17 november 2020",
            "lagudebut" => "black mamba",
            "jumlahanggota" => 4,
            "anggota" => ['karina', 'giselle', 'winter', 'ningning'],
            "fandom" => "MY",
            "logo" => "aespa.jpg"
        ],
        [ // > KATSEYE
            "nama" => "katseye",
            "agensi" => "HYBE x Geffen Records",
            "tanggaldebut" => "16 agustus 2024",
            "lagudebut" => "debut",
            "jumlah anggota" => 6,
            "anggota" => ['daniela', 'sophia', 'lara', 'manon', 'megan', 'yoonchae'],
            "fandom" => "eyekons",
            "logo" => "katseye.jpg"
        ],
        [ // > TWICE
            "nama" => "twice",
            "agensi" => "JYP entertainment",
            "tanggaldebut" => "20 oktober 2015",
            "lagu debut" => "like ooh-aah",
            "jumlah anggota" => 9,
            "anggota" => ['nayeon', 'jeongyeon', 'momo', 'sana', 'jihyo', 'mina', 'dahyun', 'chaeyeong', 'tzuyu'],
            "fandom" => "ONCE",
            "logo" => "twice.jpg"
        ],
        [ // > IZONE
            "nama" => "izone",
            "agensi" => "Off the Record Entertainment",
            "tanggaldebut" => "29 oktober 2018",
            "lagudebut" => "la vien en rose",
            "jumlahanggota" => 12,
            "anggota" => ['eunbi', 'sakura','hyewon', 'yena', 'chaeyeon', 'chaewon', 'minju', 'nako', 'hitomi', 'yuri', 'yujin', 'wonyoung'],
            "fandom" => "WIZONE",
            "logo" => "izone.jpg"
        ],
        [ // > BLACKPINK
            "nama" => "blackpink",
            "agensi" => "YG entertainment",
            "tanggaldebut" => "8 agustus 2016",
            "lagudebut" => "boombayah",
            "jumlahanggota" => 4,
            "anggota" => ['jisoo', 'jennie', 'rose', 'lisa'],
            "fandom" => "BLINK",
            "logo" => "blackpink.jpg"
        ],
        [ // > RED VELVET
            "nama" => "redvelvet",
            "agensi" => "SM entertainment",
            "tanggaldebut" => "8 agustus 2014",
            "lagudebut" => "happiness",
            "jumlahanggota" => 5,
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
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            background-color: black;
        }

        img {
            margin-bottom: 30px;
            filter: drop-shadow(3px, 3px, 5px, white);
        }
    </style>
</head>
<body>

        <h1>EYYO GG</h1>

        <br>

        <ul>
            <?php foreach($girlgroups as $girlgroup): ?>
                <li>
                    <a href="<?= $girlgroup["nama"] ?>.php?
                        nama=<?= $girlgroup["nama"] ?>&
                        tanggaldebut=<?=$girlgroup["tanggaldebut"] ?? 'Tidak tersedia';?>&
                        lagudebut=<?=$girlgroup["lagudebut"] ?? 'Tidak tersedia';?>&
                        fandom=<?=$girlgroup["fandom"];?>&
                        logo=<?=$girlgroup["logo"];?>">
                        <?php echo $girlgroup["nama"]; ?>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>

</body>
</html>