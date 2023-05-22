<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LecturerController extends Controller
{
    public function index(Request $request) {
        $keyword = $request->keyword;
        $lecturer = Lecturer::where('nidn', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('course', 'LIKE', '%'.$keyword.'%') // Memakai LIKE agar keyword tidak spesifik, bisa mencari beberapa kata saja
                    ->paginate(10);
        return view('lecturer', ['lecturerList' => $lecturer]);
    }

    public function detail($id) {
        $lecturer = Lecturer::findOrFail($id);
        return view('lecturer-detail', ['lecturerDetail' => $lecturer]);
    }

    public function create() {
        return view('lecturer-add');
    }

    public function store(Request $request) {
        $lecturer = Lecturer::create($request->all());
        if($lecturer) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Dosen Berhasil');
        }
        return redirect("/lecturer");
    }

    public function edit($id) {
        $lecturer = Lecturer::findOrFail($id);
        return view('/lecturer-edit', ['lecturer' => $lecturer]);
    }

    public function update(Request $request, $id) {
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->update($request->all());
        if($lecturer) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update Dosen Berhasil');
        }
        return redirect("/lecturer");
    }

    public function delete($id) {
        $lecturer = Lecturer::findOrFail($id);
        return view("/lecturer-delete", ['lecturer' => $lecturer]);
    }

    public function destroy($id) {
        $deletedLecturer = Lecturer::findOrFail($id);
        $deletedLecturer->delete();
        if($deletedLecturer) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete Dosen Berhasil');
        }
        return redirect("/lecturer");
    }

    public function deletedLecturer() {
        $deletedLecturer = Lecturer::onlyTrashed()->get();
        return view("/lecturer-delete-list", ['deletedLecturer' => $deletedLecturer]);
    }

    public function restore($id) {
        $restore = Lecturer::withTrashed()->where("id", $id)->restore();
        if($restore) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore Dosen Berhasil!');
        }
        return redirect("/lecturer");
    }
}
