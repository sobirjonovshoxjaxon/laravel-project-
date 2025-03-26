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

        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
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

            'title_uz'=>'required',
            'title_ru'=>'required',
            'title_en'=>'required',
            'image'=>'required',
            'description_uz'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required'
        ]);

        // dd($request->all()); 

        $post = new Post;

        $file = $request->file('image');
        $fileName = rand()."_".$file->getClientOriginalName();
        $file->move(public_path('assets/img/'),$fileName);

        $post->title_uz = $request['title_uz'];
        $post->title_ru = $request['title_ru'];
        $post->title_en = $request['title_en'];
        $post->description_uz = $request['description_uz'];
        $post->description_ru = $request['description_ru'];
        $post->description_en = $request['description_en'];
        $post->image = $fileName;

        if($request->user()->posts()->save($post)){
            $message = "Ma'lumot qo'shildi";
        }

        return redirect()->route('post.table');

    }


    public function postDelete($id){

        $customer = Post::where('id',$id)->first();
        $customer->delete();

        if($customer->image != ""){

            $image = public_path('assets/img/'.$customer->image);
            unlink($image);
        }

        return redirect()->back();
    }

    public function postEdit($id){

        $post = Post::findOrFail($id);
        return view('admin.posts.edit',compact('post'));
    }

    public function PostUpdate(Request $request){

        $request->validate([

            'title_uz'=>'required',
            'title_ru'=>'required',
            'title_en'=>'required',
            'image'=>'required',
            'description_uz'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required'
        ]);

        
        //dd($request->all());

        $post = Post::find($request['postId']);

        if($post->image != ""){

            $image = public_path('assets/img/'.$post->image);
            unlink($image);
        }

        $file = $request->file('image');
        $fileName = rand()."_".$file->getClientOriginalName();
        $file->move(public_path('assets/img/'),$fileName);

        $post->title_uz = $request['title_uz'];
        $post->title_ru = $request['title_ru'];
        $post->title_en = $request['title_en'];
        $post->description_uz = $request['description_uz'];
        $post->description_ru = $request['description_ru'];
        $post->description_en = $request['description_en'];
        $post->image = $fileName;

        $post->update();

        return redirect()->route('post.table');
    }
}
