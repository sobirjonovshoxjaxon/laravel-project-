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

            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
            'image'=>'required',
            'description_uz'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required'
        ]);

        //dd($request->all());

        $service = new Service;

        $file = $request->file('image');
        $fileName = rand()."_".$file->getClientOriginalName();
        $file->move(public_path('assets/img/'),$fileName); 

        $service->name_uz = $request['name_uz'];
        $service->name_ru = $request['name_ru'];
        $service->name_en = $request['name_en'];
        $service->description_uz = $request['description_uz'];
        $service->description_ru = $request['description_ru'];
        $service->description_en = $request['description_en'];
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

    public function serviceEdit($id){

        $service = Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
    }

    public function serviceUpdate(Request $request){

        $request->validate([

            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
            'image'=>'required',
            'description_uz'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required',
        ]);

        //dd($request->all());

        $service = Service::find($request['serviceId']);

        if($service->image != ""){

            $image = public_path('assets/img/'.$service->image);
            unlink($image);
        }

        $file = $request->file('image');
        $fileName = rand()."_".$file->getClientOriginalName();
        $file->move(public_path('assets/img/'),$fileName);

        $service->name_uz = $request['name_uz'];
        $service->name_ru = $request['name_ru'];
        $service->name_en = $request['name_en'];
        $service->image = $fileName;
        $service->description_uz = $request['description_uz'];
        $service->description_ru = $request['description_ru'];
        $service->description_en = $request['description_en'];

        $service->update();

        return redirect()->route('service.index');
    }

}
