<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Anggota</title>
</head>
<body>
    <h1><center><b>Data Biodata</b></center></h1>
    <ul>
    @foreach($a as $data)
        <li>
            Id:{{ $data->id  }}<br>

            Nama :<a href="/tes-bio/{{ $data->id}}">                {{$data->nama}}</a>

        </li><hr>
        @endforeach
    </ul>
</body>
</html>