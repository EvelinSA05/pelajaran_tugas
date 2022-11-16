<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        return view('suhu');
    }

    // public function ket(Request $request)
    // {
    //     $ket = $request->ket;

    //     switch ($ket) {
    //         case 'C':
    //             # code...
    //             break;
    //         case 'F':
    //             # code...
    //             break;
    //         case 'K':
    //             # code...
    //             break;
    //         case 'R':
    //             # code...
    //             break;
            
    //         default:
    //             # code...
    //             break;
    //     }
    // }

    public function suhu(Request $request)
    {
        $suhu = $request->suhu;

        if (isset($_POST['fahrenheit'])) {
            $hasil = ($suhu * 9/5) + 32;
            echo "hasil konversi dari suhu Celcius ke Fahrenheit = $hasil";
        }

        if (isset($_POST['kelvin'])) {
            $hasil = $suhu + 273.15;
            echo "hasil konversi dari suhu Celcius ke Kelvin = $hasil";
        }

        if (isset($_POST['reamur'])) {
            $hasil = $suhu * 4/5;
            echo "hasil konversi dari suhu Celcius ke Reamur = $hasil";
        }
    }
}
