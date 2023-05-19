@extends('layouts.mainlayout')

@section('title', 'Welcome')

@section('content')
    Hello {{Auth::user()->name}}
@endsection