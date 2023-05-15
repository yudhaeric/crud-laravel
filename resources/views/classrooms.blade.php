@extends('layouts.mainlayout')

@section('title', 'Class Rooms')

@section('content')
    <h3>Data Ruang Kelas</h3>
    <div>
        <a href="" class="btn btn-primary my-3">Tambah Data</a>
    </div>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        @foreach ($classrooms as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection