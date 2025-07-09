<?php
    // ARRAY
    // nilai di dalam array: elemen
    //tipe data elemen boleh beda

    //tanggal
    $hari = date('l');

    switch ($hari) {
        case 'Monday':
            $hari = 'Senin';
            break;
        case 'Tuesday':
            $hari = 'Selasa';
            break;
        case 'Wednesday':
            $hari = 'Rabu';
            break;
        case 'Thursday':
            $hari = 'Kamis';
            break;
        case 'Friday':
            $hari = 'Jumat';
            break;
        case 'Saturday':
            $hari = 'Sabtu';
            break;
        case 'Sunday':
            $hari = 'Minggu';
            break;
        default:
            $hari = 'Invalid';
            break;
    }

    $tanggal = date('d M Y');

    //cara lama
    $namanamahari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');

    //cara baru
    $makanan = ["baso", "mie ayam", "mie goreng", "nasi goreng", "dimcum hentai", "bubur cumcum"];

    //output array
    //print_r() / var_dump()

    //menampilkan panjang array
    // count()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif
        }
    </style>
</head>
<body>
    <h2>
        <?= "List Menu hari ini moms ($hari, $tanggal)";?>
    </h2>
    <?php
        $makanan[] = 'bubur ayam'; // menambahkan elemen baru pada array
        $makanan[] = 'mie kocok';
    ?>
    <ul?>
        <?php for($i = 0; $i < count($makanan); $i++):?>
            <?php if($i === count($makanan)):?>
                <?php break; ?>
            <?php else:?>
                <li>
                    <?= "$makanan[$i]"; ?>
                </li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
</body>
</html>