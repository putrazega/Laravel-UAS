<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;
Use Alert;

class MatkulController extends Controller
{
    
    public function index()
    {
        $matkul = Matkul::get()->sortBy('kode_matkul'); //select * from mahasiswa
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request){
        Matkul::create($request->all());
        toast('Berhasil menyimpan data.','success');
        return redirect()->route('matkul');
    }

    public function edit($id){
        $matkul = Matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id){
        $matkul = Matkul::find($id);
        $matkul->update($request->all());
        toast('Berhasil mengedit data.','success');
        return redirect()->route('matkul');
    }

    public function destroy(Request $request, $id){
        $matkul = Matkul::find($id);
        $matkul->delete();
        toast('Berhasil menghapus data.','success');
        return redirect()->route('matkul');
    }
}
