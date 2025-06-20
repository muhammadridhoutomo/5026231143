<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai')->get();
        return view('nilai/indexnilai', ['nilai' => $nilai]);

    }

    public function tambah()
    {
        return view('nilai/tambahdata');
    }


    public function store(Request $request)
    {


        DB::table('nilai')->insert([
        'nomerinduksiswa' => $request->nomerinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);


        return redirect('/eas')->with('success', 'Data berhasil disimpan!');
    }
}
