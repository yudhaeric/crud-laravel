@extends('layouts.mainlayout')

@section('title', 'Students Delete')

@section('content')
    <a href="/students" class="btn btn-primary my-3">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Delete</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedStudents as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nim}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->deleted_at}}</td>
                    <td>
                        <a href="student/{{$data->id}}/restore">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection