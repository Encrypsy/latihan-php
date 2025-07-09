<?php
       if(!(isset($_GET["nama"])||
        !(isset($_GET["tanggaldebut"]))||
        !(isset($_GET["lagudebut"]))||
        !(isset($_GET["fandom"]))||
        !(isset($_GET["logo"]))
    )):
        //redirect: memindahkan page
        header("Location: index.php");
        exit;
    endif;
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

        <div class="container">
            <div class="container-judul">
                <h2>KATSEYE PAGE</h2>
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