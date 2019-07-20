@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>
                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $mhs->id) }}"method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input class="form-control" type="text" value=" {{ $mhs->nama }} " name="nama"readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Induk Mahasiswa</label>
                            <input class="form-control" type="text" value=" {{ $mhs->nim }} " name="nim"readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input class="form-control" type="text" value=" {{ $mhs->dosen->nama }} " name="nama"readonly>
                        </div>
                        <div class="form-group">
                        <a href="{{ route('mahasiswa.index') }}"class="btn btn-info">kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
