<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Service;

class PageController extends Controller
{
    public function index(){

        $posts = Post::all();
        $services = Service::all();

        return view('index',compact('posts','services'));
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
