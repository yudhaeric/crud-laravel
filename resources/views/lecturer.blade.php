@extends('layouts.mainlayout')

@section('title', 'Lecturer')

@section('content')
    <h3>Data Dosen</h3>
    <div class="d-flex justify-content-between">
        <div class="my-3">
            <a href="/lecturer-add" class="btn btn-primary">Tambah Data</a>
            <a href="/lecturer-delete-list" class="btn btn-success">Lihat Data Terhapus</a>
        </div>
        <div class="my-3 col-12 col-sm-8 col-md-3">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="keyword">
                    <button class="input-group-text btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <table class="table">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Action</th>
        </tr>
        @foreach ($lecturerList as $data)
            <tr>
                <td>{{$loop->iteration + $lecturerList->firstItem() - 1}}</td>
                <td>{{$data->nidn}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->course}}</td>
                <td>
                    <a href="/lecturer/{{$data->id}}">Detail</a>
                    <a href="lecturer-edit/{{$data->id}}">Edit</a>
                    <a href="lecturer-delete/{{$data->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="my-5">
        {{$lecturerList->links()}}
    </div>
@endsection