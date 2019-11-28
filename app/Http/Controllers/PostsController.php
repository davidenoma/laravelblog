<?php


namespace flashnet\Http\Controllers;

use Illuminate\Http\Request;
use flashnet\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
   public function index(){
//       $request = [
//           'title' => 'Learning Laravel',
//           'body' => 'This is nive'
//           
//       ];
      // $posts = Post::all();
     //  $posts = Post::where('id',1)->first();
//       $posts = Post::take(1)->get();
//      // dd($posts); 
//       return view('posts.posts', compact('posts') );
//       $post = Post::create($request);
//       dd($post); 
    // $post =  Post::find(1);
       //To get a hold of the data in the model
       
      /* $post -> update([
           'title' => 'title updated',
           'body' => ' body updated'
       ]);
      
       $post = Post::where('id', 2) -> update([
           'title' => 'Update 11'
           'body' => 'Body Upd ated 11'
       ]);
       $post = Post */
       //$posts = DB::table('posts') -> get();
    //    $posts = DB::table('posts') -> where('id', '<',5)->orderBy('id','desc')->get();
       //The conditional operators can also be used in this case.
       //dd($posts);
    //    return view('posts.posts', compact('posts'));
    $data = ['David', 'DAniel', 'Emma'];

    $collect = collect($data);

    // dd(get_class($collect));
   // dd($collect->last());
   dd($collect[2]);

       
   } 
}
