@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">Tambah data mahasiswa</div><br>
                <div class="card-body">
                    <form action="{{ route('mahasiswa.store') }}"method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Induk Mahasiswa</label>
                            <input class="form-control" type="text" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <select name="id_dosen" class="form-control" id="">
                                @foreach ($dosen as $data)
                                    <option value=" {{ $data->id }} ">
                                    {{ $data->nama }} 
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Hobi</label>
                            <select name="hobi[]" class="form-control multiple" id="" multiple>
                                @foreach ($hobi as $data)
                                    <option value=" {{ $data->id }} ">
                                    {{ $data->hobi }} 
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
