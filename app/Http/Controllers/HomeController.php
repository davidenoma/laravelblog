<?php

namespace flashnet\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        //Former Index
//      echo $request -> name . ' ' .$request -> location;
//        echo '<br/>'.$request -> get('name',null);
//        return '<form method="post" action= "'.route('contact').'"> <input type="text" name="name" /> <input type="submit"/> </form>';
//        $user = "davidenoma";
        $data =['alex', 'javed', 'ali'];
       // return view('home.index',['user' => $user]);
//         return view('home.index)->with('user', $user);
        return view('home.index', compact('data'));
    }
    public function store(Request $request){
        dd($request -> all());
        
        
    }
    
}
