<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

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

//__CRUD Opertaion__//
Route::get('/index',[StudentController::class,'index'])->name('index.student');
//__data intset__//
Route::get('/create',[StudentController::class,'create'])->name('create.student');
Route::post('/store',[StudentController::class,'store'])->name('student.store');
//__data edit__//
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit.student');
Route::post('/update/{id}',[StudentController::class,'update'])->name('student.update');
//__data Delete__//
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('delete.student');