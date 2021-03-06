<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('welcome');
});

Route::get('/list',  [TaskController::class, 'index']);

Route::post('/store', [TaskController::class, 'store'])->name('task.store');

Route::delete('/listo/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

Route::get('/task', [TaskController::class,'showForm']);

Route::get('/show', [TaskController::class,'show']);

Route::put('/update/{id}', [TaskController::class,'update']);

