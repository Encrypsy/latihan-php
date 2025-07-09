<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

    <?php if (isset($_POST["button"]) && isset($_POST["nama"])) : ?>
        <h1>Halo selamat datang, <?=$_POST["nama"]; ?></h1>
    <?php else: ?>
        
    <?php endif; ?>

    <form method="post">
        <input type="text" name="nama">
        <button type="submit" name="button">Kirim</button>
    </form>
</body>
</html>