<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Matkul;
use Illuminate\Http\Request;
Use Alert;

class NilaiController extends Controller
{

    public function index()
    {
        $nilai = Nilai::with('matkul', 'mahasiswa')->get(); //select * from mahasiswa
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $matkul = Matkul::all(); //select * from mahasiswa
        $mahasiswa = Mahasiswa::with('user')->get(); //select * from mahasiswa
        return view('nilai.create', compact('matkul', 'mahasiswa'));
    }

    public function store(Request $request){
        Nilai::create($request->all());
        toast('Berhasil menyimpan data.','success');
        return redirect()->route('nilai');
    }

    public function edit($id){
        $matkul = Matkul::all(); //select * from mahasiswa
        $mahasiswa = Mahasiswa::with('user')->get(); //select * from mahasiswa
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'matkul', 'mahasiswa'));
    }

    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Berhasil mengedit data.','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('nilai');
    }

    public function destroy(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Berhasil menghapus data.','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('nilai');
    }
}
