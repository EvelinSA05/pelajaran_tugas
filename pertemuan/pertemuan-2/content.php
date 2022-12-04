<form action="" method="post">
tanggal : 
<input type="number" name="tgl" id="">
bulan:
<input type="number" name="bln" id="">
<input type="submit" name="kirim" value="kirim" id="">
</form>

<?php 

if (isset($_POST['kirim'])) {
    $tgl = $_POST['tgl'];
    $bln = $_POST['bln'];

   if ($tgl > 0 && $tgl < 32 && $bln > 0 && $bln < 13) {
        if ($bln==5) {
            if ($tgl > 0 && $tgl < 21) {
                echo 'zodiak anda taurus';
            }else {
                echo 'zodiak anda capricorn';
            }
        }
   }else {
    echo 'tanggal atau bulan salah';
   }
   echo '<br>';
   echo 'tanggal lahir anda : '.$tgl;
   echo '<br>';
   echo 'bulan lahir anda : '.$bln;
}

    // $menu  = ["home", "kontak", "sejarah", "jurusan"];
    // $judul = ["apel", "jeruk", "mangga", "durian"];
    // $deskripsi = [
    //     "apel adalah buah yang manis dan berwarna merah.....", 
    //     "jeruk adalah buah yang asam dan berwarna oranye....",
    //     "mangga adalah buah yang asam dan berwarna hijau....",
    //     "durian adalah buah yang bau dan berwarna kuning...."
    // ];
    // for ($i=0; $i < 4; $i++) { 
    //   echo "<li>$menu[$i]</li>";
    // }
    
    // $link = [
    //     "Home"    => "<a href = '#'> home    </a>", 
    //     "Kontak"  => "<a href = '#'> kontak  </a>",
    //     "Sejarah" => "<a href = '#'> sejarah </a>",
    //     "Jurusan" => "<a href = '#'> jurusan </a>"
    // ];
    // echo $link ["Home"];
    // foreach ($link as $key => $value) {
    //     echo "<li>";
    //     echo $value;
    //     echo "</li>";
    // }

    // $tanggal = 31;
    // if ($tanggal >= 1 && $tanggal <= 31) {
    //    echo "benar";
    // }else{
    //     echo "salah";
    // }

    // $nilai = 75;
    // if ($nilai >= 0 && $nilai <= 100) {
    //         if ($nilai > 70) {
    //             if ($nilai == 71) {
    //                 echo "kkm";
    //             }
    //             if ($nilai > 71 && $nilai < 80) {
    //                 echo "C";
    //             }
    //             if ($nilai >= 80 && $nilai < 90) {
    //                 echo "B";
    //             }
    //             if ($nilai >= 90 && $nilai <= 100) {
    //                 echo "A"; 
    //             }
    //         }else {
    //             echo "tidak lulus";
    //         }
    // }else {
    //     echo "nilai salah";
    // }


//     function zodiak($t, $b)
//     {
//         $tanggal = $t;
// $bulan   = $b;
// if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
//     if ($bulan == 1) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda capricorn";
//         }else {
//             echo "zodiak anda aquarius";
//         }
//     }
//     if ($bulan == 2) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda aquarius";
//         }else {
//             echo "zodiak anda pisces";
//         }
//     }
//     if ($bulan == 3) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda pisces ";
//         }else{
//             echo "zodiak anda aries";
//         }
//     }
//     if ($bulan == 4) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda aries";
//         }else {
//             echo "zodiak anda taurus";
//         }
//     }
//     if ($bulan == 5) {
//         if ($tanggal >= 1 && $tanggal <= 20 ) {
//             echo "zodiak anda taurus";
//         }else {
//             echo "zodiak anda gemini";
//         }
//     }
//     if ($bulan == 6) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda gemini";
//         }else {
//             echo "zodiak anda cancer";
//         }
//     }
//     if ($bulan == 7) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda cancer";
//         }else {
//             echo "zodiak anda leo";
//         }
//     }
//     if ($bulan == 8) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda leo";
//         }else {
//             echo "zodiak anda virgo";
//         }
//     }
//     if ($bulan == 9) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda virgo";
//         }else {
//             echo "zodiak anda libra";
//         }
//     }
//     if ($bulan == 10) {
//        if ($tanggal >= 1 && $tanggal <= 20) {
//         echo "zodiak anda libra";
//        }else {
//         echo "zodiak anda scorpio";
//        }
//     }
//     if ($bulan == 11) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//         echo "zodiak anda scorpio";
//         }else {
//         echo "zodiak anda sagitarius";
//         }
//     }
    
//     if ($bulan == 12) {
//         if ($tanggal >= 1 && $tanggal <= 20) {
//             echo "zodiak anda sagitarius";
//          }else{
//         echo "zodiak anda capricorn";
//         }
//     }
// }

//     else {
//         echo "tanggal atau bulan salah";
//     }
//     }

//     zodiak(1,100);
//     for ($i=1; $i < 13; $i++) { 
//         zodiak(25,$i);
//         echo "<br>";
//     }

?>