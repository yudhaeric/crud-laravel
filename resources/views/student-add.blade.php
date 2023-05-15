@extends('layouts.mainlayout')

@section('title', 'Add New Student')
    
@section('content')
    <div>
        <h3 class="text-3xl font-bold underline text-center">Tambah Data Mahasiswa</h3>
        @if ($errors->any())
            <div class="alert alert-danger col-6 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mt-3 col-6 m-auto">
            <form action="student" method="post">
                @csrf
                <div>
                    <label for="nim" class="my-2">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control">
                </div>                
                <div>
                    <label for="name" class="my-2">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>                
                <div>
                    <label for="email" class="my-2">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>                
                <div>
                    <label for="address" class="my-2">Alamat</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>                
                <div>
                    <label for="class_id" class="my-2">Kelas</label>
                    <select name="class_id" id="class_id" class="form-control">
                        <option value="">Pilih Kelas</option>
                        @foreach ($class as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="active" class="my-2">Aktif</label>
                    <select name="active" id="active" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="my-3 mb-5">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection