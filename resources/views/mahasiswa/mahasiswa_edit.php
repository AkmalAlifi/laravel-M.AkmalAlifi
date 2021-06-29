@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Edit Data Mahasiswa</div>

                    <div class="card-body">
                    <from action="#"method="post">
                        <div class="from-row">
                        @csrf
                            <div class="col">
                                <label for="">User Id</label>
                                <input type="number" name="user_id" class="form-control" placeholder="Tambahkan user id">
                            </div>
                            <div class="col">
                            <label for="">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir">
                            </div>
                            <div class="col">
                            <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir">
                            </div>
                            <div class="col">
                            <label for="">Telphone</label>
                                <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Nomor Telphone">
                            </div>
                            <div class="col">
                            <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat">
                            </div>
                            <div class="col">
                            <label for="">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control" placeholder="Tambahkan Jenis Kelamin">
                            </div>
                            <div class="col">
                            <label for="">Photo</label>
                                <input type="file" name="foto" class="form-control" placeholder="Tambahkan Foto">
                            </div>
                        </div>
                    </div>
                    <div class="from-group">
                        <div class="from-row">
                            <div class="col">
                                <button type="submit"class="btn btn-md btn-primary ">SIMPAN</button>
                                <a href ="{{route('mahasiswa')}} "class="btn btn-md- btn-danger">BATAL</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection