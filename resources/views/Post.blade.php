<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Anggota</title>
</head>
<body>
    <h1><center><b>Data Post</b></center></h1>
    <ul>
    @foreach($a as $data)
        <li>
            Id:{{ $data->id  }} 
            Judul :<a href="/tes-post/{{ $data->id}}">
                {{$data->title}}<br></a>
            Isi: {{ $data->content }}
        </li><hr>
        @endforeach
    </ul>
</body>
</html>