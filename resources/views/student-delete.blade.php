@extends('layouts.mainlayout')

@section('title', 'Delete Student')
    
@section('content')
    <div class="mt-5">
        <h2>Are you sure to delete data: {{$student->name}} {{$student->nim}}</h2>
        <form action="/student-destroy/{{$student->id}}" method="post" style="display: inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>
@endsection