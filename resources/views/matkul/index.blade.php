@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Table Data Matkul
                <a href="{{ route('tambah_matkul') }}" class="btn btn-success btn-md float-right">Add Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th>ID</th>
                                <th>KODE MATKUL</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($matkul as $mk)  
                            <tr>
                                <td>{{ $mk->id }}</td>
                                <td>{{ $mk->kode_matkul }}</td>
                                <td>{{ $mk->nama_matkul }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown">Aksi</button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('edit_matkul', $mk->id) }}" class="dropdown-item">Edit</a>
                                    <div class="dropdown-divider"></div>
                                        <a href="{{ route('hapus_matkul', $mk->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="dropdown-item">Hapus</a>
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
