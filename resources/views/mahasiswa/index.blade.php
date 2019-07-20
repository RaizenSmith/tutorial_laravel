@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Data Mahasiswa</div><br>
                    <center>
                    <a href="{{ route('mahasiswa.create') }}"
                    class="btn btn-primary">Tambah Data</a>
                    </center><br>
                    <div class="table-responsive"></div>
                    <table class="table">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Nama Dosen</th>
                            <th>Hobi</th>
                            <th colspan="3" style="text-align:center;">Aksi</th>
                        </tr>
                        @php $no = 1;@endphp
                        @foreach ($mhs as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nim }}</td>
                                <td>{{ $data->dosen->nama }}</td>
                                <td>
                                    <ol>
                                        @foreach ($data->hobi as $hobi)
                                            <li> {{ $hobi->hobi }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td>
                                    <a href=" {{ route('mahasiswa.edit',$data->id) }}"
                                        class="btn btn-success">edit </td>
                                </a>
                                <td>
                                    <a href=" {{ route('mahasiswa.show',$data->id) }}"
                                        class="btn btn-warning">Detail Data </td>
                                </a>
                                <td>
                                    <form action=" {{ route('mahasiswa.destroy',$data->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Hapus Data
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
