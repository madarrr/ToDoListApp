<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/home',[TaskController::class,'show'])->name('home');
Route::post('/new',[TaskController::class,'store'])->name('new');

// Route::delete('/tasks/{id}',[TaskController::class,'destroy'])->name('tasks.destroy');
