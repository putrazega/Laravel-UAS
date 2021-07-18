@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Table Data Mahasiswa
                <a href="{{ route('tambah_mahasiswa') }}" class="btn btn-success btn-md float-right">Add Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th>ID</th>
                                <th>NAMA LENGKAP</th>
                                <th>NPM</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>JENIS KELAMIN</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($mahasiswa as $ms)  
                            <tr>
                                <td>{{ $ms->id }}</td>
                                <td>{{ $ms->user->name }}</td>
                                <td>{{ $ms->npm }}</td>
                                <td>{{ $ms->tempat_lahir.', '.$ms->tgl_lahir  }}</td>
                                <td>{{ $ms->alamat }}</td>
                                <td>{{ $ms->telepon }}</td>
                                <td>{{ $ms->gender }}</td>
                                <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown">Aksi</button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('edit_mahasiswa', $ms->id) }}" class="dropdown-item">Edit</a>
                                    <div class="dropdown-divider"></div>
                                        <a href="{{ route('hapus_mahasiswa', $ms->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="dropdown-item">Hapus</a>
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
