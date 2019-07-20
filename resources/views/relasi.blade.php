<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halo</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="col-sm-8 col-sm-offset-2">
        @foreach ($mahasiswa as $data)
            <h3><small>[{{$data->nama}}]</small></h3>
            <h5>Hobi :
                @foreach ($data->hobi as $key )
                    <small>{{$key->hobi}}</small>
                @endforeach
            </h5>
            <h4>
                <li>Nama Wali        :<Strong>{{$data->wali->nama}}</Strong></li>
                <li>Dosen Pembimbing :{{$data->dosen->nama}}</li>
            </h4>
        @endforeach
    </div>
    @endsection 
</body>
</html>