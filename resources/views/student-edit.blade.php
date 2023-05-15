@extends('layouts.mainlayout')

@section('title', 'Edit Student')
    
@section('content')
    <div>
        <h3 class="text-3xl font-bold underline text-center">Edit Data Mahasiswa</h3>
        <div class="mt-3 col-6 m-auto">
            <form action="/student/{{$student->id}}" method="post">
                @csrf
                @method("put")
                <div>
                    <label for="nim" class="my-2">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="{{$student->nim}}" required>
                </div>                
                <div>
                    <label for="name" class="my-2">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}" required>
                </div>                
                <div>
                    <label for="email" class="my-2">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{$student->email}}" required>
                </div>                
                <div>
                    <label for="address" class="my-2">Alamat</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$student->address}}" required>
                </div>
                <div>
                    <label for="active" class="my-2">Aktif</label>
                    <select name="active" id="active" class="form-control" required>
                        <option value="{{$student->active}}">{{$student->active}}</option>
                        @if ($student->active == "1")
                            <option value="2">2</option>
                        @else
                            <option value="1">1</option>
                        @endif
                        <option value="{{$student->active}}">{{$student->active}}</option>
                    </select>
                </div>

                <div class="my-3 mb-5">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection