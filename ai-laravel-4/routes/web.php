<?php

use App\Http\Controllers\AdministrativeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


Route::view('/', 'home')->name('home');

Route::get('courses/showcase', [CourseController::class, 'showCase'])->name('courses.showcase');
Route::get('courses/{course}/curriculum', [CourseController::class, 'showCurriculum'])->name('courses.curriculum');
Route::resource('courses', CourseController::class);

Route::resource('departments', DepartmentController::class);

Route::resource('disciplines', DisciplineController::class);

Route::resource('teachers', TeacherController::class);
Route::delete('teachers/{teacher}/photo', [TeacherController::class, 'destroyPhoto'])
 ->name('teachers.photo.destroy');

Route::resource('students', StudentController::class);

Route::resource('administratives', AdministrativeController::class);

// Add a discipline to the cart:
Route::post('cart/{discipline}', [CartController::class, 'addToCart'])
 ->name('cart.add');
// Remove a discipline from the cart:
Route::delete('cart/{discipline}', [CartController::class, 'removeFromCart'])
 ->name('cart.remove');
// Show the cart:
Route::get('cart', [CartController::class, 'show'])->name('cart.show');
// Confirm (store) the cart and save disciplines registration on the database:
Route::post('cart', [CartController::class, 'confirm'])->name('cart.confirm');
// Clear the cart:
Route::delete('cart', [CartController::class, 'destroy'])->name('cart.destroy');

