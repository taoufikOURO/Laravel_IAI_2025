<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::resource('test', TestController::class);
Route::view('/', 'welcome')->name('home');

Route::get('/students', [StudentController::class, 'index'])->name("students.index");
Route::get('/students/create', [StudentController::class, 'create'])->name("students.create");
Route::post('/students', [StudentController::class, 'store'])->name("students.store");
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.show');
