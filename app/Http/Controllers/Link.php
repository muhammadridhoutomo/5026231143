<?php

namespace App\Http\Controllers; //ini tuh packagenya

use Illuminate\Http\Request;

class Link extends Controller
{
    //Bikin function
    //public function namafuntion()
    public function helloword()
    {
        return view('blog');
    }
    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
