<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('students.index');

Route::get('/students',  [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
Route::post('/students/create', [App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::get('/students', [App\Http\Controllers\StudentController::class, 'store'])->name('students.index');
Route::get('/students/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('students.index');
Route::delete('/students/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('students.index');

Route::get('/subjects', [App\Http\Controllers\StudentController::class, 'index'])->name('subjects.index');
Route::post('/subjects/create', [App\Http\Controllers\StudentController::class, 'create'])->name('subjects.create');
Route::post('/subjects', [App\Http\Controllers\StudentController::class, 'store'])->name('subjects.store');
Route::get('/subjects/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('subjects.show');
Route::get('/subjects/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('subjects.edit');
Route::put('/subjects/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('subjects.destroy');

Route::get('/marks', [App\Http\Controllers\MarkController::class, 'index'])->name('marks.index');
Route::post('/marks/create', [App\Http\Controllers\MarkController::class, 'create'])->name('marks.create');
Route::post('/marks', [App\Http\Controllers\MarkController::class, 'store'])->name('marks.store');
Route::get('/marks/{id}', [App\Http\Controllers\MarkController::class, 'show'])->name('marks.show');
Route::get('/marks/{id}/edit', [App\Http\Controllers\MarkController::class, 'edit'])->name('marks.edit');
Route::put('/marks/{id}', [App\Http\Controllers\MarkController::class, 'update'])->name('marks.update');
Route::delete('/marks/{id}', [App\Http\Controllers\MarkController::class, 'destroy'])->name('marks.destroy');
