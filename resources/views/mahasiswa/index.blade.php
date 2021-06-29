@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                
                <a href="mahasiswa-create" class="btn btn-sm btn-primary float-right">TAMBAH DATA</a>
                </div>

                <div class="card-body">
                  <dib class="table-respon">
                  <table class="table table-bordered">
                    <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>TEMPAT, TANGGAL LAHIR</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>JENIS KELAMIN</th>
                        <th>PHOTO</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->user->name }}</td>
                        <td>{{ $mhs->tempat_lahir.', '. $mhs->tgl_lahir }}</td>
                        <td>{{ $mhs->telepon }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>{{ $mhs->gender }}</td>
                        <td></td>
                        <td>
                            <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                            <a href="{{ route('hapus.makul', $mk->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>

                    @endforeach
                  </table>
                  </dib>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection