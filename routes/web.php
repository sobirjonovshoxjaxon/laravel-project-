<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

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

//AdminController 
Route::get('/admin/index',[AdminController::class, 'AdminIndex'])->name('admin.index');
Route::get('/admin/posts/index',[AdminController::class, 'PostTable'])->name('post.table');
Route::get('/admin/posts/create',[AdminController::class, 'PostCreate'])->name('post.create');
Route::get('/admin/login',[AdminController::class, 'AdminLogin'])->name('login');
