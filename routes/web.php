<?php

use App\Http\Controllers\AuthController;
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

Route::middleware(['auth'])->group(function ()
{
    Route::get('/', [TaskController::class, 'index'])->name('task.home');

    Route::get('/tasks', [TaskController::class, 'index']);

    Route::post('/task', [TaskController::class, 'createAction'])->name('task.createAction');
    Route::post('/task/edit', [TaskController::class, 'editAction'])->name('task.editAction');
    Route::post('/task/mark', [TaskController::class, 'markTask'])->name('task.mark');

    Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    Route::get('/task/del', [TaskController::class, 'destroy'])->name('task.destroy');
});

// AUTH
Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::post('/auth/signin', [AuthController::class, 'signinAction'])->name('auth.signinAction');
Route::post('/auth/signup', [AuthController::class, 'signupAction'])->name('auth.signupAction');
