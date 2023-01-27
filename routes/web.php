<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
// Route::get();
// Route::post();
// Route::patch();
// Route::put();
// Route::delete();
// Route::options();

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);

Route::get('/users', [UserController::class, 'index'])->name('login');

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/student/{id}', [StudentController::class, 'show']);
