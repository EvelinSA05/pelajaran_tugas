<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }

    public function kalkulator(Request $request)
    {
        $bil1 = $request -> bil1;
        $bil2 = $request -> bil2;

        if (isset($_POST['tambah'])) {
            $hasil = $bil1 + $bil2;
            echo "Hasil Penjumlahan <h2><b>$bil1 + $bil2 = $hasil</b></h2>";
        }

        if (isset($_POST['kurang'])) {
            $hasil = $bil1 - $bil2;
            echo "Hasil Pengurangan <h2><b>$bil1 - $bil2 = $hasil</b></h2>";
        }
    
        if (isset($_POST['kali'])) {
            $hasil = $bil1 * $bil2;
            echo "Hasil Perkalian <h2><b>$bil1 x $bil2 = $hasil</b></h2>";
        }
    
        if (isset($_POST['bagi'])) {
            $hasil = $bil1 / $bil2;
            echo "Hasil Pembagian <h2><b>$bil1 : $bil2 = $hasil</b></h2>";
        }
    
        if (isset($_POST['modulus'])) {
            $hasil = $bil1 % $bil2;
            echo "Modulus dari <h2><b>$bil1 % $bil2 = $hasil</b></h2>";
        }
    
        if (isset($_POST['pangkat'])) {
            $hasil = $bil1 ** $bil2;
            echo "Hasil pemangkatan <h2><b>$bil1 ** $bil2 = $hasil</b></h2>";
        }
    }
}
