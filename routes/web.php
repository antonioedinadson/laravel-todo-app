<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/signin', [AuthController::class, 'signin']);
Route::get('/signup', [AuthController::class, 'signup']);

Route::get('/task', [TaskController::class, 'index']);
// Route::get('/task/:id', [TaskController::class, 'show']);
// Route::post('/tasks', [TaskController::class, 'create']);
// Route::patch('/tasks/:id', [TaskController::class, 'updatde']);
// Route::delete('/tasks/:id', [TaskController::class, 'destroy']);
