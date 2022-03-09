<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ExamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/exams', function () {
    return view('exams');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/profile',[ProfileController::class, 'index'])->name('index');
Route::get('/profile/edit',[ProfileController::class, 'edit'])->name('edit');
Route::get('/modal/edit',[ProfileController::class, 'edit'])->name('edit');
Route::post('update',[ProfileController::class, 'update'])->name('update');

Route::post('apply',[JobsController::class, 'apply'])->name('apply');
Route::get('/inbox',[JobsController::class, 'inbox'])->name('inbox');

Route::post('jobtest',[ExamController::class, 'jobtest'])->name('jobtest');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
