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
                    <a href="<?php echo "aespa.php?nama=", $girlgroup["nama"];?>">
                        <?= $girlgroup["nama"]?>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
        <a href=""></a>
</body>
</html>