<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Anggota</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <center><h2>Detail Post</h2></center>
    Id: {{$post->id}}
    <hr>
    Nama: {{$post->nama}}
    <hr>
    Alamat: {{$post->alamat}}
    <hr>
    Sekolah: {{$post->sekolah}}
    <hr>
    umur: {{$post->umur}}
    <hr>
</body>
</html>