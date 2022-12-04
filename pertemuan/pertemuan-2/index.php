<?php 
    require_once "content.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <ul>
                <?php 
                    for ($i=0; $i < 4; $i++) { 
                        echo " <li> <a href='#'> $menu[$i] </li> ";
                    }
                ?>
            </ul>
        </div>
        <div>
            <ol>
                <!-- <li><a href="?isi=0"><?= $judul[0] ?></a></li>
                <li><a href="?isi=1"><?= $judul[1] ?></a></li>
                <li><a href="?isi=2"><?= $judul[2] ?></a></li>
                <li><a href="?isi=3"><?= $judul[3] ?></a></li> -->
                
                <?php 
                    for ($i=0; $i < 4; $i++) { 
                        echo " <li> <a href='?isi=$i' > $judul[$i] </li> ";
                    }
                ?>
            </ol>
        </div>
        <div>
            <?php
                if(isset ($_GET ["isi"])){
                    $isi=$_GET ["isi"];
                    echo $deskripsi[$isi];
                } else{
                    echo "Silahkan pilih buah";
                }
            ?>
        </div>
    </div>
</body>
</html>