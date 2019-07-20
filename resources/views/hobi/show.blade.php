@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Dosen</div>
                <div class="card-body">
                    <form action="{{ route('hobi.update',$hobi->id) }}"method="post">
                        <input type="hidden" value="PATCH" name="_method">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Hobi</label>
                            <input class="form-control" type="text" name="hobi" value="{{ $hobi->hobi }}"readonly>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                                Kembali
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
