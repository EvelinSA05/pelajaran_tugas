<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiakController extends Controller
{
    public function index()
    {
        return view('zodiak');
    }

    public function zodiak(Request $request)
    {
        $t = $request -> tanggal;
        echo "Anda Memasukkan <b>Tanggal $t</b>";
        echo '<br>';
        $b = $request -> bulan;
        echo "Anda Memasukkan <b>Bulan $b</b>";
       
        if ( $t < 1 || $t > 31 || $b < 1 || $b > 12 ) {
            $hasil = "<h1>TANGGAL ATAU BULAN SALAH</h1>";
        }
        else {
            if ($b == 1) {
                if ($t > 19 && $t < 32) {
                    $hasil = "AQUARIUS";
                }else {
                    $hasil = "CAPRICORN";
                }
            }
            if ($b == 2) {
                if ($t > 19 && $t < 29) {
                    $hasil = "PISCES";
                }else {
                    $hasil = "AQUARIUS";
                }
            }
            if ($b == 3) {
                if ($t > 20 && $t < 32) {
                    $hasil = "ARIES";
                }else {
                    $hasil = "PISCES";
                }
            }
            if ($b == 4) {
                if ($t > 19 && $t < 31) {
                    $hasil = "TAURUS";
                }else {
                    $hasil = "ARIES";
                }
            }
            if ($b == 5) {
                if ($t > 20 && $t < 32) {
                    $hasil = "GEMINI";
                }else {
                    $hasil = "TAURUS";
                }
            } 
            if ($b == 6) {
                if ($t > 20 && $t < 31) {
                    $hasil = "CANCER";
                }else {
                    $hasil = "GEMINI";
                }
            } 
            if ($b == 7) {
                if ($t > 22 && $t < 32) {
                    $hasil = "LEO";
                }else {
                    $hasil = "CANCER";
                }
            } 
            if ($b == 8) {
                if ($t > 22 && $t < 32) {
                    $hasil = "VIRGO";
                }else {
                    $hasil = "LEO";
                }
            } 
            if ($b == 9) {
                if ($t > 22 && $t < 31) {
                    $hasil = "LIBRA";
                }else {
                    $hasil = "VIRGO";
                }
            } 
            if ($b == 10) {
                if ($t > 22 && $t < 32) {
                    $hasil = "SCORPIO";
                }else {
                    $hasil = "LIBRA";
                }
            } 
            if ($b == 11) {
                if ($t > 21 && $t < 31) {
                    $hasil = "SAGITTARIUS";
                }else {
                    $hasil = "SCORPIO";
                }
            } 
            if ($b == 12) {
                if ($t > 21 && $t < 32) {
                    $hasil = "CAPRICORN";
                }else {
                    $hasil = "SAGITTARIUS";
                }
            } 
            echo "<h1> Zodiak Anda : </h1>";
        }
        return "<h1>$hasil</h1>";
    }
}
