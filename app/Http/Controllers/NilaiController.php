<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    // Menampilkan halaman index
    public function index()
    {
        $nilai = DB::table('nilai')->get();
        return view('nilai/indexnilai', ['nilai' => $nilai]);

    }

    // Menampilkan form tambah data
    public function tambah()
    {
        return view('nilai/tambahdata');
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {

        // Simpan ke tabel
        DB::table('nilai')->insert([
        'nomerinduksiswa' => $request->nomerinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);


        return redirect('/eas')->with('success', 'Data berhasil disimpan!');
    }
}
