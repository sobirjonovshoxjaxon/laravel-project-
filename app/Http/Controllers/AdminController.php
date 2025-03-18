<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminIndex(){
        return view('admin.index');
    }

    public function PostTable(){
        return view('admin.posts.index');
    }

    public function PostCreate(){
        return view('admin.posts.create');
    }

    public function AdminLogin(){
        return view('admin.login');
    }
}
