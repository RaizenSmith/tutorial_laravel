@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- TAMBAH DISINI --}}    
                    <div class="table-responsive"></div>
                        <center>
                        <a href="{{route ('dosen.create') }}"
                            class="btn btn-info"> Tambah Data 
                        </a>
                    </center>
                    <table class="table">
                        <tr>
                            <th>NO</th>
                            <th>Nama dosen</th>
                            <th>Nomor induk Dosen Pembimbing</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                        @php $no = 1;@endphp
                        @foreach ($dosen as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nipd }}</td>
                                <td>
                                    <a href=" {{ route('dosen.show',$data->id) }}"
                                        class="btn btn-warning">show </td>
                                </a>
                                <td>
                                    <a href=" {{ route('dosen.edit',$data->id) }}"class="btn btn-success">edit </td>
                                </a>
                                <td>
                                    <form action=" {{ route('dosen.destroy',$data->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE"> <button type="submit" class="btn btn-danger">delete</button> 
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
