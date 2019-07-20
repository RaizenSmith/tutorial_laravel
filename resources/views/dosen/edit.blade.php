@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Dosen</div>
                <div class="card-body">
                    <form action="{{ route('dosen.update',$dosen->id) }}"method="post">
                        <input type="hidden" value="PATCH" name="_method">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input class="form-control" type="text" name="nama" value="{{ $dosen->nama }}">
                        </div>
                    <div class="form-group">
                            <label for="">Nomor Induk Dosen Pembimbing</label>
                            <input class="form-control" type="text" name="nipd" value="{{ $dosen->nipd }}">
                        </div>
                    <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
