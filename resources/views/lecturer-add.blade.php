@extends('layouts.mainlayout')

@section('title', 'Add New Lecturer')
    
@section('content')
    <div>
        <h3 class="text-3xl font-bold underline text-center">Tambah Data Dosen</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mt-3 col-6 m-auto">
            <form action="lecturer" method="post">
                @csrf
                <div>
                    <label for="nidn" class="my-2">NIDN</label>
                    <input type="text" name="nidn" id="nidn" class="form-control">
                </div>                
                <div>
                    <label for="name" class="my-2">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>                
                <div>
                    <label for="course" class="my-2">Mata Kuliah</label>
                    <input type="text" name="course" id="course" class="form-control">
                </div>                
                <div>
                    <label for="email" class="my-2">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>                
                <div>
                    <label for="phone" class="my-2">Telephone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>                
                <div class="my-3 mb-5">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection