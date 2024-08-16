<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function penjumlahan(){
        //echo 'Controller Dipanggil';
        $panjang=10;
        $lebar=5;
        $luas=$panjang*$lebar;
        $keliling=(2*$panjang)+(2*$lebar);
        //echo "Luas Segi Empat =".$luas;
        return view('latihan', ['luasnya'=>$luas,
                                'kelilingnya'=>$keliling]);
    }


    //new
    public function formhitung(){
        return view('formhitung');
    }
    
    
    public function formhitung_post (Request $request) {
        $panjang=$request->panjang;
        $lebar=$request->lebar;
        $luas=$panjang*$lebar;
        return view ('proses_formhitung',['luas'=>$luas]);
    }
}
