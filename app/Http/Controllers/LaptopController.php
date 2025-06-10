<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    public function index()
    {
        $laptop = DB::table('laptop')->paginate(10);
        return view('laptop/indexlaptop', ['laptop' => $laptop]);
    }

    public function tambah()
    {
        return view('laptop/tambahlaptop');
    }

    public function store(Request $request)
    {
        DB::table('laptop')->insert([
            'merklaptop' => $request->merk,
            'hargalaptop' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/laptop');
    }

    public function edit($id)
    {
        $laptop = DB::table('laptop')->where('id', $id)->get();
        return view('laptop/editlaptop', ['laptop' => $laptop]);
    }

    public function update(Request $request)
    {
        DB::table('laptop')->where('id', $request->id)->update([
            'merklaptop' => $request->merk,
            'hargalaptop' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/laptop');
    }

    public function hapus($id)
    {
        DB::table('laptop')->where('id', $id)->delete();
        return redirect('/laptop');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $laptop = DB::table('laptop')
            ->where('merklaptop','like',"%".$cari."%")
            ->paginate();
        return view('laptop/indexlaptop', ['laptop' => $laptop, 'cari' => $cari]);
    }
}
