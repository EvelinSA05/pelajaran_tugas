<?php 
    require_once "variabel.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul[3] ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="wrapper">
        <div class="content"> 
            <header>
                <img src="../images/buah.png" alt="logo">
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
                <h2><?= $kontak[0] ?></h2>
                <form action="apel.php" method="get">
                <fieldset>
                    <legend><?= $kontak[1] ?></legend>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="" placeholder="Nama Anda !" required>
                    <br>
                    <label for="email"><?= $kontak[2] ?></label>
                    <input type="email" name="email" id="" placeholder="Email Anda ! " required>
                    <br>
                    <label for="alamat"><?= $kontak[3] ?></label>
                    <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                    <br>
                <input type="submit" name="kirim" value="kirim" id="">
                </fieldset>
                </form>
            </section>
            <footer>
                <p><i class="fa fa-copyright" aria-hidden="true"><?= $foot ?></i></p>
            </footer>
        </div>
    </div>
</body>
</html>