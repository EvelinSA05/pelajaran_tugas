<?php 
  require_once "pages/variabel.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $titel ?> </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
      <div class="content"> 
        <header>
          <img src="images/buah.png" alt="logo">
          <h1><?= $judul[0] ?></h1>
          <nav>
            <ul>
              <li><a href="#"><?= $nav[0] ?></a></li>
              <li><a href="#"><?= $nav[1] ?></a> 
                <ul>
                  <li><a href="pages/apel.php"><?= $li[0] ?></a></li>
                  <li><a href="pages/jeruk.php"><?= $li[1] ?></a></li>
                  <li><a href="pages/mangga.php"><?= $li[2] ?></a></li>
                  <li><a href="pages/pisang.php"><?= $li[3] ?></a></li>
                </ul>
              </li>
              <li><a href="pages/kontak.php"><?= $nav[2] ?></a></li>
            </ul>
          </nav>
        </header>
        <section>
          <h2><?= $judul[1] ?></h2>
          <p><?= $p ?></p>
        </section>
        <footer>
          <p><i class="fa fa-copyright" aria-hidden="true"><?= $foot ?></i></p>
        </footer>
      </div>
    </div>  
</body>
</html>