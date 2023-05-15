@extends('layouts.mainlayout')

@section('title', 'Edit Lecturer')
    
@section('content')
    <div>
        <h3 class="text-3xl font-bold underline text-center">Edit Data Dosen</h3>
        <div class="mt-3 col-6 m-auto">
            <form action="/lecturer/{{$lecturer->id}}" method="post">
                @csrf
                @method("put")
                <div>
                    <label for="nidn" class="my-2">NIDN</label>
                    <input type="text" name="nidn" id="nidn" class="form-control" value="{{$lecturer->nidn}}" required>
                </div>                
                <div>
                    <label for="name" class="my-2">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$lecturer->name}}" required>
                </div>                
                <div>
                    <label for="course" class="my-2">Mata Kuliah</label>
                    <input type="text" name="course" id="course" class="form-control" value="{{$lecturer->course}}" required>
                </div>                
                <div>
                    <label for="email" class="my-2">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{$lecturer->email}}" required>
                </div>                
                <div>
                    <label for="phone" class="my-2">Telephone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{$lecturer->phone}}" required>
                </div>                
                <div class="my-3 mb-5">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection