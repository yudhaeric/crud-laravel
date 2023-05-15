<?php

namespace App\Http\Controllers;

use App\Models\Classrooms;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    public function index() {
        $classroom = Classrooms::all();
        return view('classrooms', ['classrooms' => $classroom]);
    }
}
