@extends('layouts.mainlayout')

@section('title', 'Lecturer Delete')

@section('content')
    <a href="/students" class="btn btn-primary my-3">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedLecturer as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nidn}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->course}}</td>
                    <td>
                        <a href="/lecturer/{{$data->id}}/restore">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection