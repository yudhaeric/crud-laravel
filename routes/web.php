<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ClassroomsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authentication']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Student CRUD
// Create
Route::get('/student-add', [StudentController::class, 'create'])->middleware('auth');
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /student
// langsung membaca controller store
Route::post('/student', [StudentController::class, 'store'])->middleware('auth');
// Read
Route::get('/students', [StudentController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'detail'])->middleware('auth');
// Update
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /student/{id}
// langsung membaca controller update
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware('auth');
// Delete
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware('auth');
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /student-destroy/{id}
// langsung membaca controller destroy
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware('auth');
Route::get('/student-delete-list', [StudentController::class, 'deletedStudent'])->middleware('auth');
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware('auth');

// Lecturer CRUD
// Create
Route::get('/lecturer-add', [LecturerController::class, 'create'])->middleware('auth');
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /lecturer
// langsung membaca controller store
Route::post('/lecturer', [LecturerController::class, 'store'])->middleware('auth');
// Read
Route::get('/lecturer', [LecturerController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/lecturer/{id}', [LecturerController::class, 'detail'])->middleware('auth');
// Update
Route::get('/lecturer-edit/{id}', [LecturerController::class, 'edit'])->middleware('auth');
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /lecturer/{id}
// langsung membaca controller update
Route::put('/lecturer/{id}', [LecturerController::class, 'update'])->middleware('auth');
// Delete
Route::get('/lecturer-delete/{id}', [LecturerController::class, 'delete'])->middleware('auth');
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /lecturer-destroy/{id}
// langsung membaca controller destroy
Route::delete('/lecturer-destroy/{id}', [LecturerController::class, 'destroy'])->middleware('auth');
Route::get('/lecturer-delete-list', [LecturerController::class, 'deletedLecturer'])->middleware('auth');
Route::get('/lecturer/{id}/restore', [LecturerController::class, 'restore'])->middleware('auth');

// Classroom Controller
Route::get('/classrooms', [ClassroomsController::class, 'index'])->middleware('auth');