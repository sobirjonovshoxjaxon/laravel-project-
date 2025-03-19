<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

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

    public function LoginCheck(Request $request){

        $request->validate([

            'name'=>'required',
            'password'=>'required',
        ]);

        $user = User::where([

            'name'=>$request['name'],
            'password'=>$request['password']
        ])->first();

        if($user){
            Auth::login($user);
            return redirect()->route('admin.index');
        }else{

            return redirect()->route('login');
        }
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('login');
    }


    public function postSave(Request $request){

        $request->validate([

            'title'=>'required',
            'image'=>'required',
            'description'=>'required'
        ]);

        // dd($request->all()); 

        $post = new Post;

        $file = $request->file('image');
        $fileName = rand()."_".$file->getClientOriginalName();
        $file->move(public_path('assets/img/'),$fileName);

        $post->title = $request['title'];
        $post->description = $request['description'];
        $post->image = $fileName;

        if($request->user()->posts()->save($post)){
            $message = "Ma'lumot qo'shildi";
        }

        return redirect()->route('post.table');

    }
}
