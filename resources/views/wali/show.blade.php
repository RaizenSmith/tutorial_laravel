@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Wali</div>
                <div class="card-body">
                    <form action="{{ route('wali.update', $wali->id) }}"method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input class="form-control" type="text" value=" {{ $wali->nama }} " name="nama"readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Id Mahasiswa</label>
                            <input class="form-control" type="text" value=" {{ $wali->mahasiswa->nama }} " name="nama" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('wali.index') }}"class="btn btn-info">kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
