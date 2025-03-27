<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Models\Post;

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
Route::get('/admin/posts/edit/{id}',[AdminController::class, 'PostEdit'])->name('post.edit');
Route::post('/admin/posts/edit/update',[AdminController::class, 'PostUpdate'])->name('post.update');

Route::get('/admin/login',[AdminController::class, 'AdminLogin'])->name('login');
Route::post('/admin/login/check',[AdminController::class, 'LoginCheck'])->name('login.check');
Route::get('/logout',[AdminController::class, 'logout'])->name('logout');

Route::post('/admin/post/save',[AdminController::class, 'postSave'])->name('post.save');

//Delete Post 
Route::get('/admin/post/delete/{id}',[AdminController::class, 'postDelete'])->name('post.delete');

//ServiceController 
Route::get('admin/service/index',[ServiceController::class, 'serviceIndex'])->name('service.index');
Route::get('admin/service/create',[ServiceController::class, 'serviceCreate'])->name('service.create');
Route::post('admin/service/create',[ServiceController::class, 'serviceCreateSave'])->name('service.create.save');
Route::get('admin/service/delete/{id}',[ServiceController::class, 'serviceDelete'])->name('service.delete');
Route::get('admin/service/edit/{id}',[ServiceController::class, 'serviceEdit'])->name('service.edit');
Route::post('admin/service/edit/save',[ServiceController::class, 'serviceUpdate'])->name('service.update');


//Language 
Route::get('/lang/{lang}',function($lang){

    session(['lang'=>$lang]);
    return back();
});

//Search 
Route::get('/search', function(){

    $val = Request()->get('q'); 

    if($val != ""){

        $posts = Post::where('description_uz','LIKE','%'.$val.'%')->get();

        if(count($posts)>0){

            return view('search',['posts'=>$posts]);

        }else{

            return view('error404');

        }


    }else{

       return redirect()->back();
    }
});

