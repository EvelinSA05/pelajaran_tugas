<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        return view('suhu');
    }

    public function suhu(Request $request)
    {
        $suhu = $request->suhu;
        $a = $request->awal;
        $k = $request->konversi;

        if ($a == 'C') {
            if ($k == 'C') {
                $hasil = $suhu . '°C';
            }
            if ($k == 'F') {
                $hasil = ($suhu * 9/5) + 32 . '°F';
            }
            if ($k == 'K') {
                $hasil = $suhu + 273.15 . '°K';
            }
            if ($k == 'R') {
                $hasil = $suhu * 4/5 . '°R';
            }
            if ($k == 'Ra') {
                $hasil = ($suhu + 273.15) * 9/5 . '°Ra';
            }
        }

        if ($a == 'F') {
            if ($k == 'C') {
                $hasil = ($suhu - 32) * 5/9 . '°C';
            }
            if ($k == 'F') {
                $hasil = $suhu . '°F';
            }
            if ($k == 'K') {
                $hasil = ($suhu - 32) * 5/9 + 273.15 . '°K';
            }
            if ($k == 'R') {
                $hasil = ($suhu - 32) * 4/9 . '°R';
            }
            if ($k == 'Ra') {
                $hasil = $suhu + 459.67 . '°Ra';
            }
        }

        if ($a == 'K') {
            if ($k == 'C') {
                $hasil = $suhu - 273.15 . '°C';
            }
            if ($k == 'F') {
                $hasil = ($suhu - 273.15) * 9/5 + 32 . '°F';
            }
            if ($k == 'K') {
                $hasil = $suhu . '°K';
            }
            if ($k == 'R') {
                $hasil = ($suhu - 273) * 4/5 . '°R';
            }
            if ($k == 'Ra') {
                $hasil = $suhu * 9/5 . '°Ra';
            }
        }

        if ($a == 'R') {
            if ($k == 'C') {
                $hasil = $suhu / 0.8 . '°C';
            }
            if ($k == 'F') {
                $hasil = ($suhu * 2.25) + 32 . '°F';
            }
            if ($k == 'K') {
                $hasil = ($suhu / 0.8) + 273.15 . '°K';
            }
            if ($k == 'R') {
                $hasil = $suhu . '°R';
            }
            if ($k == 'Ra') {
                $hasil = ($suhu * 2.25) + 491.67 . '°Ra';
            }
        }

        if ($a == 'Ra') {
            if ($k == 'C') {
                $hasil = ($suhu - 491.67) * 5/9 . '°C';
            }
            if ($k == 'F') {
                $hasil = $suhu - 459.67 . '°F';
            }
            if ($k == 'K') {
                $hasil = $suhu * 5/9 . '°K';
            }
            if ($k == 'R') {
                $hasil = ($suhu / 1.8 + 273.15) . '°R';
            }
            if ($k == 'Ra') {
                $hasil = $suhu . '°Ra';
            }
        }

        return "<h1>$hasil</h1>";
    }
}
