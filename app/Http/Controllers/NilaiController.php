<?php

namespace App\Http\Controllers;

use App\nilai;
use App\mahasiswa;
use App\makul;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
      public function index()
    {
        $nilai = nilai::with(['mahasiswa','makul'])->get(); 
        return view('nilai.index',compact('nilai'));
    }

    public function create()
    {
         $mahasiswa = mahasiswa::all(); 
         $makul = makul::all();
         return view('nilai.create', compact('mahasiswa','makul'));
    }

    public function store(Request $request)
    {
        nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
     
        $mahasiswa = mahasiswa::all();
        $makul = makul::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('nilai','mahasiswa','makul'));
    }

    public function update(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
    }
}