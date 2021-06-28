<?php

namespace App\Http\Controllers;

use App\Biaya;
use Illuminate\Http\Request;
Use Alert;

class BiayaController extends Controller
{
   public function index()
   {
       $biaya = Biaya::all();//select * from biaya
       return view('biaya.index', compact('biaya'));
   }
   
   public function create()
   {
       return view('biaya.create');
   }

   public function store(Request $request)
   {
        // dd($request->all()); untuk mencoba menampilkn semua data
        Biaya::create($request->all());
        alert('Sukses','Simpan Data Berhasil', 'success');
        return redirect()->route('biaya');
   }

   public function edit(Request $request, $id)
   {
        $biaya = biaya::where('id_biaya', $id)->first();
        return view('biaya.edit', compact('biaya'));
   }

   public function update(Request $request, $id)
   {
       $biaya = Biaya::where('id_biaya', $id)->update([
            'jenis' => $request->jenis,
            'biaya' => $request->biaya
       ]);
       alert('Sukses','Edit Data Berhasil', 'success');
       return redirect()->route('biaya');
   }

   public function destroy(Request $request, $id)
   {
        $biaya = Biaya::where('id_biaya', $id)->delete();
        alert('Sukses','Hapus Data Berhasil', 'success');
        return redirect()->route('biaya');
   }

}
