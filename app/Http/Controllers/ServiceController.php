<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function serviceIndex(){

        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }

    public function serviceCreate(){
        return view('admin.services.create');
    }

    public function serviceCreateSave(Request $request){
        
        $request->validate([

            'name'=>'required',
            'image'=>'required',
            'description'=>'required'
        ]);

        //dd($request->all());

        $service = new Service;

        $file = $request->file('image');
        $fileName = rand()."_".$file->getClientOriginalName();
        $file->move(public_path('assets/img/'),$fileName); 

        $service->name = $request['name'];
        $service->description = $request['description'];
        $service->image =  $fileName;

        if($request->user()->services()->save($service)){

            $message = "Service muvaffaqiyatli yaratildi";
        }

        return redirect()->route('service.index');
    }

    public function serviceDelete($id){

        $service = Service::where('id',$id)->first();

        if($service->image != ""){

            $image = public_path('assets/img/'.$service->image);
            unlink($image);
        }

        $service->delete();
        return redirect()->back();
    }

}
