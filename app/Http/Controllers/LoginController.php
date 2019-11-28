<?php

namespace flashnet\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index');
    }
    public function store(Request $request){
        //dd($request -> all());
        
        $request -> validate ([
            'email' => 'required|email',
            'password' => 'required'
            
        ]);
        
        //return redirect()->route('success');
       //  return redirect()->back();
//return redirect()->back()->with('msg','Thanks for Entering Data');
        return response()->json([
            'post' => [
                ['id',1,'title' =>  'Abc'],
                ['id',2,'title' =>  'Ab'],
                ['id',3,'title' =>  'A']
                
            ]
        ]);
    }
}
