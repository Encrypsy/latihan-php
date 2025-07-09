<?php

    $pacar = ['karina', 'winter', 'minju'];
    $bilangan = [1,2,3,4,5,6,7,8,9,10];

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

        .kotak {
            width: 70px;
            height: 70px;
            text-align: center;
            line-height: 35px;
            margin: 10px;
            float: left;
            border-radius: 5px;
        }

        .ganjil {
            background-color: aquamarine;
        }

        .genap {
            background-color: brown;
        }

        .pacar {
            background-color: orchid;
            color: white;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
    <h2>list pacar yagesya, absen absen</h2>
    <?php 
        $pacar[] = 'hyeri';
        $pacar[] = 'jo yuri';
        $pacar[] = 'megan';
        $pacar[] = 'lara';

        $bilangan[] = 11;
        $bilangan[] = 12;
        $bilangan[] = 13;
        $bilangan[] = 14;
        $bilangan[] = 15;
    ?>
    <ol>
        <?php for($i = 0; $i < count($pacar); $i++):?>
            <li>
                <?= "ada <u>$pacar[$i]</u>"; ?>
            </li>
        <?php endfor; ?>
    </ol>

    <br><br>
    
    <?php for($i = 0; $i < count($bilangan); $i++):?>
        <?php if($i % 2 === 1):?>
            <div class="kotak ganjil">
                <h3>
                    <?= "$bilangan[$i]";?>
                </h3>
            </div>
        <?php elseif($i % 2 === 0):?>
            <div class="kotak genap">
                <h3>
                    <?= "$bilangan[$i]"; ?>
                </h3>
            </div>
        <?php endif;?>
    <?php endfor;?>

    <!-- foreach() = nampilin semua elemen array tanpa menggunakan looping -->

    <br><br><br>

    <div class="clear"></div>

    <?php foreach($pacar as $gf):?>
        <div class="kotak pacar">
            <h3>
                <?= "$gf";?>
            </h3>
        </div>
    <?php endforeach; ?>

    <div class="clear"></div>

</body>
</html>