<?php

namespace flashnet\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use flashnet\Mail\Welcome;

class MailController extends Controller
{
    //
    public function index(){
        $user = "davide@gmai.com";
        
        Mail::to($user)->send(new Welcome);
       // return view('emails.welcome');
    }
    public function store(Request $request){
       // dd($request -> all());
        
        $request -> validate([
            'email' => 'required|email'
        ]
//       [
//           'required' => 'THis is a required field',
//           'email.required' => 'This is a wrong email please fill in '
//        ]
                            );
    }
}
