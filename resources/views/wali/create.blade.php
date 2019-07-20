@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data mahasiswa</div>
                <div class="card-body">
                    <form action="{{ route('wali.store') }}"method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama wali</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">Nama mahasiswa</label>
                            <select name="id_mahasiswa" class="form-control" id="">
                                @foreach ($mahasiswa as $data)
                                    <option value=" {{ $data->id }} ">
                                    {{ $data->nama }} 
                                </option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group">
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
