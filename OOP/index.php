<form action="" method="post">
    <input type="number" name="bulan" placeholder="bulan" required id="">
    <input type="number" name="tanggal" placeholder="tanggal" required id="">
    <input type="submit" name="submit" value="kirim" id="">
</form>

<?php 

    require_once "zodiak.php";

    if (isset($_POST['submit'])) {
       $b = $_POST['bulan'];
       $t = $_POST['tanggal'];
       echo "Anda memasukkan <b>bulan $b</b>";
       echo "<br>";
       echo "Anda memasukkan <b>tanggal $t</b>";
       echo Zodiak::zodiak($b,$t);
    }

    // $rumus = new Rumus;

    // echo $rumus->luasLingkaran(5);
    // echo '<br>';
    // echo $rumus->kelilingLingkaran(5);
    // echo '<br>';
    // echo $rumus->luasPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus->kelilingPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus->luasSegitiga(5,3);
    // echo '<br>';
    // echo $rumus->kelilingSegitiga(3);
    // echo '<br>';

    // $zodiak = new Zodiak;

    // echo $zodiak->zodiak(1,21);

?>