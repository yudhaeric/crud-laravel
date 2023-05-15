@extends('layouts.mainlayout')

@section('title', 'Detail Student')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Class ID</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$studentDetail->id}}</td>
                <td>{{$studentDetail->nim}}</td>
                <td>{{$studentDetail->name}}</td>
                <td>{{$studentDetail->email}}</td>
                <td>{{$studentDetail->address}}</td>
                <td>{{$studentDetail->class_id}}</td>
                <td>{{$studentDetail->active}}</td>
                <td>{{$studentDetail->created_at}}</td>
                <td>{{$studentDetail->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection