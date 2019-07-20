<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Anggota</title>
</head>
<body>
    
    <ul>
    {{-- <!-- <?php
        foreach ($a as $data) {
            echo "<li>". $data['id'] ."</li>";
            echo "<li>". $data['nama'] ."</li>";
            echo "<hr>";
        }
    ?> --> --}}
    @foreach($a as $data)
        <li>{{ $data['id']  }} 
            {{ $data['nama']}}
        </li><hr>
        @endforeach
    </ul>
</body>
</html>