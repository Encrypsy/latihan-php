<?php

    $informasi_siswa = [
        ['Malya Maritza', '07 Feb 2009', 'malyamaritza07@gmail.com'],
        ['Khumaira Maheswari', '19 Jan 2009', 'UmAy00@gmail.com'],
        ['Mustika Kusumapriangan', '27 Maret 2008', 'MUSMUS@gmail.com'],
        ['10 Des 2009', 'Keysa', 'KunciK3y@gmail.com'],
    ];

    $tanggallahir = $informasi_siswa[3][0];
    $informasi_siswa[3][0] = $informasi_siswa[3][1];
    $informasi_siswa[3][1] = $tanggallahir;

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

    <h2>
        DATA SISWA
    </h2>

    <p>
       <?php for($i = 0; $i < count($informasi_siswa); $i++):?> 
            <?php for($j = 0; $j < 3; $j++):?>
                <?php if($j === 2):?>              
                    <ul>
                        <li>
                            <?php echo "Alamat email: ", $informasi_siswa[$i][$j], "<br><br>"; ?>
                        </li>
                    </ul>
                <?php elseif($j === 0): ?>
                    <ul>
                        <li>
                            <?php echo "Nama: ", $informasi_siswa[$i][$j]; ?>
                        </li>
                    </ul>
                <?php elseif($j === 1): ?>
                    <ul>
                        <li>
                            <?php echo "Tanggal lahir: ", $informasi_siswa[$i][$j]; ?>
                        </li>
                    </ul>
                <?php endif;?>
            <?php endfor;?>
        <?php endfor;?>
    </p>
    
</body>
</html>