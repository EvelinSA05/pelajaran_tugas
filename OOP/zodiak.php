<?php 

    class Zodiak {

        public static function zodiak($b, $t){
            if ($b < 1 || $b > 12 || $t < 1 || $t > 31) {
                $hasil = "<h1>TANGGAL ATAU BULAN SALAH</h1>";
            }
            else if ($b > 5) {
                $hasil = "<h1>BULAN BELUM DITENTUKAN</h1>";
            }
            else {
                if ($b == 1) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "TAURUS";
                    }else {
                        $hasil = "CAPRICORN";
                    }
                }
                if ($b == 2) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "LEO";
                    }else {
                        $hasil = "SAGITARIUS";
                    }
                }
                if ($b == 3) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "PISCES";
                    }else {
                        $hasil = "ARIES";
                    }
                }
                if ($b == 4) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "GEMINI";
                    }else {
                        $hasil = "CANCER";
                    }
                }
                if ($b == 5) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "SCORPIO";
                    }else {
                        $hasil = "LIBRA";
                    }
                } 
                echo "<h1> Zodiak anda : </h1>";
            }
            return "<h1>$hasil</h1>";
        }
    }

?>