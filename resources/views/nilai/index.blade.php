@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Table Data Nilai
                <a href="{{ route('tambah_nilai') }}" class="btn btn-success btn-md float-right">Add Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th>ID</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($nilai as $nil)  
                            <tr>
                                <td>{{ $nil->id }}</td>
                                <td>{{ $nil->mahasiswa->npm }}</td>
                                <td>{{ $nil->mahasiswa->user->name }}</td>
                                <td>{{ $nil->matkul->nama_matkul }}</td>
                                <td>{{ $nil->matkul->sks }}</td>
                                <td>{{ $nil->nilai }}</td>
                                <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown">Aksi</button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('edit_nilai', $nil->id) }}" class="dropdown-item">Edit</a>
                                    <div class="dropdown-divider"></div>
                                        <a href="{{ route('hapus_nilai', $nil->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="dropdown-item">Hapus</a>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
