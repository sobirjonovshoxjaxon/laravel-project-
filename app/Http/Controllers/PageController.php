<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function contact(){
        return view('contact');
    }

    public function blogDetail(){
        return view('blog-detail');
    }

    public function error(){
        return view('error404');
    }
}
