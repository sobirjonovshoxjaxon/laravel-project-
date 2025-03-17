<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//PageController 
Route::get('/',[PageController::class, 'index'])->name('index');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/blog/detail',[PageController::class, 'blogDetail'])->name('blog.detail');
Route::get('/404/error',[PageController::class, 'error'])->name('error');
