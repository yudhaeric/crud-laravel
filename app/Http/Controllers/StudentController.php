<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classrooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index() {
        $student = Student::paginate(5);
        return view('student', ['studentList' => $student]);
    }

    public function detail($id) {
        $student = Student::findOrFail($id);
        return view('student-detail', ['studentDetail' => $student]);
    }

    public function create() {
        $class = Classrooms::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }
    
    public function store(StudentCreateRequest $request) {

        // Send data ke database

        // $student = new Student();
        // $student->nim = $request->nim;
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->address = $request->address;
        // $student->class_id = $request->class_id;
        // $student->active = $request->active;
        // $student->save();

        // Bisa pakai mass assignment tapi perlu mendaftarkan nya ke Models
        $student = Student::create($request->all());
        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Mahasiswa Berhasil');
        }
        return redirect("/students");
    }

    public function edit($id) {
        $student = Student::findOrFail($id);
        return view('/student-edit', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update Mahasiswa Berhasil');
        }
        return redirect("/students");
    }

    public function delete($id) {
        $student = Student::findOrFail($id);
        return view("/student-delete", ['student' => $student]);
    }  

    public function destroy($id) {
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();
        if($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete Mahasiswa Berhasil');
        }
        return redirect("/students");
    }

    public function deletedStudent() {
        $deletedStudent = Student::onlyTrashed()->get();
        return view("/student-delete-list", ['deletedStudents' => $deletedStudent]);
    }

    public function restore($id) {
        $restore = Student::withTrashed()->where("id", $id)->restore();
        if($restore) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore Mahasiswa Berhasil!');
        }
        return redirect("/students");
    }
}
