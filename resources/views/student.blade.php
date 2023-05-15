@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')
    <h3>Data Mahasiswa</h3>
    <div class="d-flex justify-content-between">
        <a href="/student-add" class="btn btn-primary my-3">Tambah Data</a>
        <a href="/student-delete-list" class="btn btn-info my-3">Lihat Data Terhapus</a>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{$loop->iteration + $studentList->firstItem() - 1}}</td>
                    <td>{{$data->nim}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->address}}</td>
                    <td>
                        <a href="student/{{$data->id}}">Detail</a>
                        <a href="student-edit/{{$data->id}}">Edit</a>
                        <a href="student-delete/{{$data->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-5">
        {{$studentList->links()}}
    </div>
@endsection