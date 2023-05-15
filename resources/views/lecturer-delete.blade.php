@extends('layouts.mainlayout')

@section('title', 'Delete Lecturer')
    
@section('content')
    <div class="mt-5">
        <h2>Are you sure to delete data: {{$lecturer->name}} {{$lecturer->nim}}</h2>
        <form action="/lecturer-destroy/{{$lecturer->id}}" method="post" style="display: inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/lecturer" class="btn btn-primary">Cancel</a>
    </div>
@endsection