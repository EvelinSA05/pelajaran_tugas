<?php 

    require_once ('db.php');

    if (isset($_GET['id'])& isset($_GET['menu'])) {
        $id = $_GET['id'];
        $menu = $_GET['menu'];
        if ($menu == "hapus") {
            $buah = '';
            $deskripsi = '';
            $harga = '';
            $sql = "DELETE FROM tblbuah WHERE idbuah=$id";
            $koneksi->query($sql);
            header("location:./");
        }else {
            $sql = "SELECT * FROM tblbuah WHERE idbuah=$id";
            $hasil = $koneksi->query($sql);
            $row=$hasil->fetch_array();
                $buah = $row[1];
                $deskripsi = $row[2];
                $harga = $row[3];
            }
        }else {
            $buah = '';
            $deskripsi = '';
            $harga = '';
        }
    

?>

<form action="" method="post">
    buah :
    <input type="text" name="buah" value="<?=$buah?>"><br>
    deskripsi
    <input type="text" name="deskripsi" value="<?=$deskripsi?>"><br>
    harga :
    <input type="number" name="harga" value="<?=$harga?>"><br>
    gambar :
    <input type="file" name="gambar"><br>
    <input type="submit" name="kirim" value="simpan">
</form>

<?php 

    if (isset ($_POST['kirim'])) {
      
       if (isset($_GET['menu'])) {
        $id = $_GET['id'];
        $buah = $_POST['buah'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $sql = "UPDATE tblbuah SET buah='$buah',deskripsi='$deskripsi',harga=$harga WHERE idbuah=$id";
        $koneksi->query($sql);
        header("location:./");
    }else {
        $buah = $_POST['buah'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $gambar = $_POST['gambar'];
        $sql = "INSERT INTO tblbuah(buah,deskripsi,harga,gambar) VALUES ('$buah','$deskripsi','$harga','$gambar')";
        $koneksi->query($sql);
       }
    }

    $sql = "SELECT * FROM tblbuah";

    $hasil = $koneksi->query($sql);

    echo '
    <table border="1px">
        <tr>
            <th>idbuah</th>
            <th>buah</th>
            <th>deskripsi</th>
            <th>harga</th>
            <th>gambar</th>
            <th>hapus</th>
            <th>ubah</th>
        </tr>
    ';

    if ($hasil -> num_rows > 0) {
        while ($row = $hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            echo '<td><a href = "?id='.$row[0].'&menu=hapus">hapus</a></td>';
            echo '<td><a href = "?id='.$row[0].'&menu=edit">edit</a></td>';
            echo '</tr>';
        }
    }else {
        echo 'kosong';
    }
    echo '</table>';

// require_once ('db.php');

// if (isset($_POST['simpan'])) {
//    $nama = $_POST['nama'];
//    $alamat = $_POST['alamat'];
//    $asalsklh = $_POST['asalsklh'];
//    $sql = "INSERT INTO tblteman(nama,alamat,asalsklh) VALUES ('$nama','$alamat','$asalsklh')";
// //    echo $sql;
//    $koneksi->query($sql);

// }

// if (isset($_GET['id'])) {
//     $id=$_GET['id'];
//     $sql="DELETE FROM tblteman WHERE idtmn=$id";
//     // echo $sql;
//     $koneksi -> query($sql);
// }

// echo '<br>';

// $sql = 'SELECT * FROM tblteman';

// // echo $sql;

// $hasil = $koneksi->query($sql);

// // print_r($hasil);

// // echo $hasil->num_rows;

// echo '<table border="1px">';
// echo '<tr>
//         <th>idtmn</th>
//         <th>nama</th>
//         <th>alamat</th>
//         <th>asalsklh</th>
//         <th>hapus</th>
//       </tr>';

// if ($hasil->num_rows > 0) {
//   while ($row=$hasil->fetch_array()) {
//     echo '<tr>';
//     echo '<td>'.$row[0].'</td>';
//     echo '<td>'.$row[1].'</td>';
//     echo '<td>'.$row[2].'</td>';
//     echo '<td>'.$row[3].'</td>';
//     echo '<td><a href="?id='.$row[0].'">hapus</a></td>';
//     echo '</tr>';
//   }
// } else {
//     echo 'kosong';
// }
// echo '</table>';
?>

