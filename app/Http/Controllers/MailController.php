<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Message;

class MailController extends Controller
{
    public function sendMail(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'description'=>'required'
        ]);

        //dd($request->all());

        $data = $request->all();

        Mail::to('shohjahonsobirjonov76@gmail.com')->send(new Message($data));

        return redirect()->back()->with(['send' => 'Xabar yuborildi']);
    }
}
