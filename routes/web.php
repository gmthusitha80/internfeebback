<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return redirect()->route('login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stu/{id}', [App\Http\Controllers\HomeController::class, 'getstu'])->name('getstu');
Route::get('/stulist', [App\Http\Controllers\HomeController::class, 'getstulist'])->name('getstulist');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('students', [StudentController::class, 'index'])->name('students')->middleware('auth');
Route::post('/search', [App\Http\Controllers\HomeController::class, 'search']);


