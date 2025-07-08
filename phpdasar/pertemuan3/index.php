<?php
    /*
        looping
        - for
        - while
        - do while
        - foreach (khusus untuk array)
    */ 

    // for($j = 1; $j <= 5 ; $j++) {
    //     if ($j === 5) {
    //         echo "$j <br>";
    //     } else {
    //         echo "$j ";
    //     }
    // }

    $sambutan = "halo";
    $sambutan .= " ";
    $sambutan .= "selamat datang";

    $batas = 3;

    for($i = 1; $i <= $batas; $i++):
        if($i === $batas):
            echo "$sambutan <br><br>";
        else:
            echo "$sambutan <br>";
        endif;
    endfor;

    // $nama = "Malya";
    // $nama .= " ";
    // $nama .= "Maritza";

    // $n = 1;
    // while ($n <= 5) {
    //     echo "$nama <br>";
    //     $n++;
    // }

    /*
        pengkodisian
        - if else
        - if else if else
        - ternary (singkatan buat nulis statement if else)
        - switch
    */



    /*
        <?php echo ""; ?> 
        <?= ""; ?>
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nyobain</title>
    <link rel="icon" href="broberpikir.jpg">
    <style>
        .mulai {
            background-color: green;
        }
        .end {
            background-color: red;
        }
    </style>
</head>
<body>

    <!-- tr = baris, td = kolom -->

    <?php 
        $b = 4; //baris
        $k = 2; //kolom
    ?>
       
    <table border='1' cellpadding="7" cellspacing="0">
        <?php for($i = 0; $i < $b; $i++):?>
            <tr>
                <?php for($j = 0; $j < $k; $j++):?>
                    <?php 
                        $baris = $i + 1;
                        $kolom = $j + 1;  
                    ?>
                    <?php if($baris === $b && $kolom === $k):?>
                        <td>
                            <?= "★" ;?>
                        </td>
                    <?php elseif($baris === 1 && $kolom === 1):?>
                        <td>
                            <?= "☆"; ?>
                        </td>
                    <?php else:?>
                        <td>
                            <?= "$baris, $kolom" ?>
                        </td>
                    <?php endif;?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br><br>

    <?php 
        $x = 6; // baris
        $y = 4; // kolom
    ?>

    <!-- BARIS NYA GENAP END NYA DI KIRI -->
     <!-- BARIS NYA GANJIL END NYA DI KANAN -->

    <table border="1" cellpadding="20" cellspacing="0">
            <?php for($i = 1; $i <= $x; $i++):?>
                <tr>
                    <?php for($j = 1; $j <= $y; $j++):?>
                        <?php if($i === 1 && $j === 1):?>
                            <td class="mulai">
                                <?= "GO"; ?>
                            </td>
                        <?php elseif($i === $x && $j === 1 && $i % 2 === 0):?>
                            <td class="end">
                                <?= "END"; ?>
                            </td>
                        <?php elseif($i === $x && $j === $y && $i % 2 === 1):?>
                            <td class="end">
                                <?= "END"; ?>
                            </td>
                        <?php elseif($i % 2 === 1 && $j === $y):?>
                            <td>
                                <?= "🡳"; ?>
                            </td>
                        <?php elseif($i % 2 === 0 && $j === 1):?>
                            <td>
                                <?= "🡳" ?>
                            </td>
                        <?php elseif($i % 2 === 1): ?>
                            <td>
                                <?= "🡲"?>
                            </td>
                        <?php elseif($i % 2 === 0): ?>
                            <td>
                                <?= "🡰"?>
                            </td>
                        <?php endif; ?>
                    <?php endfor;?>
                </tr>
            <?php endfor;?>
    </table>

</body>
</html>