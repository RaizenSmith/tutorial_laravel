@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" >Tambah Data Dosen</div>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}"method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                    <div class="form-group">
                            <label for="">Nomor Induk Dosen Pembimbing</label>
                            <input class="form-control" type="text" name="nipd">
                        </div>
                    <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <button type="submit" class="btn btn-info">
                                Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
