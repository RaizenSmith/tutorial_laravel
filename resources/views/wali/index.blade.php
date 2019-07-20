@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header-bg-info">Data Mahasiswa</div>
                    <center>
                    <a href="{{ route('wali.create') }}"
                    class="btn btn-primary">Tambah Data</a>
                    </center><br>    
                    <div class="table-responsive"></div>
                    <table class="table">
                        <tr>
                            <th>NO</th>
                            <th>Nama Wali</th>
                            <th>Nama Mahasiswa</th>
                            <th colspan="3" style="text-align:center;">Aksi</th>
                        </tr>
                        @php $no = 1;@endphp
                        @foreach ($wali as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->mahasiswa->nama }}</td>
                                <td>
                                    <a href=" {{ route('wali.edit',$data->id) }}"
                                        class="btn btn-success">edit </td>
                                </a>
                                <td>
                                    <a href=" {{ route('wali.show',$data->id) }}"
                                        class="btn btn-warning">Detail Data </td>
                                </a>
                                <td>
                                    <form action=" {{ route('wali.destroy',$data->id) }}" method="post">
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
