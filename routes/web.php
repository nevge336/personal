<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

// ... rest of your code
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


Route::get('/home', [PersonalController::class, 'index'])->name('home');
Route::get('/resume', [PersonalController::class, 'resume'])->name('resume');
Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
Route::post('/contact', [PersonalController::class, 'message'])->name('contact');