@extends('layouts.mainlayout')

@section('title', 'Detail Student')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$lecturerDetail->id}}</td>
                <td>{{$lecturerDetail->nidn}}</td>
                <td>{{$lecturerDetail->name}}</td>
                <td>{{$lecturerDetail->course}}</td>
                <td>{{$lecturerDetail->email}}</td>
                <td>{{$lecturerDetail->phone}}</td>
                <td>{{$lecturerDetail->created_at}}</td>
                <td>{{$lecturerDetail->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection