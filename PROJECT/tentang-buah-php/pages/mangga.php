<?php 
    require_once "variabel.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titel ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <header>
            <img src="../images/buah.png">
            <h1><?= $judul[2] ?></h1>
            <nav>
            <ul>
                <li><a href="../index.php"><?= $nav[0] ?></a></li>
                <li><?= $nav[1] ?>
                    <ul>
                        <li><a href="apel.php"><?= $li[0] ?></a></li>
                        <li><a href="jeruk.php"><?= $li[1] ?></a></li>
                        <li><a href="mangga.php"><?= $li[2] ?></a></li>
                        <li><a href="pisang.php"><?= $li[3] ?></a></li>
                    </ul>
                </li>
                <li><a href="kontak.php"><?= $nav[2] ?></a></li>
            </ul>
            </nav>
            </header>
            <section>
                <h2 id="apel"><?= $li[2] ?></h2>
                <img src="../images/mangga.png" width="150" alt="">
                <p id="paragraf"><?= $p ?></p>
                <p class="huruf warna bentuk huruf-tebal"><?= $p1 ?></p>
                <ol><?= $ol ?></ol>
                <h2>Daftar Harga</h2>
                <table border="1" >
                <thead>
                    <tr>
                        <th rowspan="2"><?= $th[0] ?></th>
                        <th colspan="2"><?= $th[1] ?></th>
                    </tr>
                    <tr>
                        <th><?= $th[2] ?></th>
                        <th><?= $th[3] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warna">
                        <td><?= $apel[0] ?></td>
                        <td><?= $harga1[0] ?></td>
                        <td><?= $harga2[0] ?></td>
                    </tr>
                    <tr>
                        <td><?= $apel[1] ?></td>
                        <td><?= $harga1[1] ?></td>
                        <td><?= $harga2[1] ?></td>
                    </tr>
                    <tr>
                        <td><?= $apel[2] ?></td>
                        <td><?= $harga1[2] ?></td>
                        <td><?= $harga2[2] ?></td>
                    </tr>
                    <tr>
                        <td><?= $apel[3] ?></td>
                        <td><?= $harga1[3] ?></td>
                        <td><?= $harga2[3] ?></td>
                    </tr>
                </tbody>
                    </table>
                    <a href="#apel"><?= $li[0] ?></a>
            </section>
            <footer>
                <p><i class="fa fa-copyright" aria-hidden="true"><?= $foot ?></i></p>
            </footer>
        </div>
    </div>
</body>
</html>