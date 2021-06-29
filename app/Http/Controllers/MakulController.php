<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;
Use Alert;

class makulController extends Controller
{
    public function index()
    {
        $makul = makul::all();
        return view('makul.index',compact('makul'));
    }

    public function create()
    {
         return view('makul.create');
    }

    public function store(Request $request)
    {
        makul::create($request->all());
        alert()->success('Sukses M. Akmal Alifi','Data Berhasil Disimpan');
        return redirect()->route('makul'); 
    }

    public function edit($id)
    {
        $makul = makul::find($id);
       return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = makul::find($id);
        $makul->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
      
    }

    public function destroy($id)
    {
        $makul = makul::find($id);
        $makul->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('makul');
    }
}