<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    
    public function index(){
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.mahasiswa_create');
    }

    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa');
    }

    
   public function edit($id)
   {
       $mahasiswa = mahasiswa::find($id); 
       return view('mahasiswa.edit', compact('mahasiswa'));
   }
}
