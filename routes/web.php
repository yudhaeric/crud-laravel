<?php

use Illuminate\Support\Facades\Route;
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

// Student CRUD
// Create
Route::get('/student-add', [StudentController::class, 'create']);
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /student
// langsung membaca controller store
Route::post('/student', [StudentController::class, 'store']);
// Read
Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'detail']);
// Update
Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /student/{id}
// langsung membaca controller update
Route::put('/student/{id}', [StudentController::class, 'update']);
// Delete
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /student-destroy/{id}
// langsung membaca controller destroy
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);
Route::get('/student-delete-list', [StudentController::class, 'deletedStudent']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);

// Lecturer CRUD
// Create
Route::get('/lecturer-add', [LecturerController::class, 'create']);
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /lecturer
// langsung membaca controller store
Route::post('/lecturer', [LecturerController::class, 'store']);
// Read
Route::get('/lecturer', [LecturerController::class, 'index']);
Route::get('/lecturer/{id}', [LecturerController::class, 'detail']);
// Update
Route::get('/lecturer-edit/{id}', [LecturerController::class, 'edit']);
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /lecturer/{id}
// langsung membaca controller update
Route::put('/lecturer/{id}', [LecturerController::class, 'update']);
// Delete
Route::get('/lecturer-delete/{id}', [LecturerController::class, 'delete']);
// Saat di klik submit dia masuk ke route ini tapi tidak redirect ke /lecturer-destroy/{id}
// langsung membaca controller destroy
Route::delete('/lecturer-destroy/{id}', [LecturerController::class, 'destroy']);
Route::get('/lecturer-delete-list', [LecturerController::class, 'deletedLecturer']);
Route::get('/lecturer/{id}/restore', [LecturerController::class, 'restore']);

// Classroom Controller
Route::get('/classrooms', [ClassroomsController::class, 'index']);