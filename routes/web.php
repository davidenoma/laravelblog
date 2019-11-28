<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
/*Route::get('/home',function(){
	echo config('services.braintree.secret');
});

Route::get('/home',function(){
	echo Config::get('services.braintree.secret');
});*/
//Route::get('/contact', function() {
//    //
//	echo "Hello from Contact Page";
//});
Route::get('users/{id?}/posts/{postId?}', function($id, $postId) {
    //
    echo $id .' '.  $postId ;
});
Route::get('users/{id?}', function($id = null) {
    //
    echo $id . "Without ID";
});

//Route Grouping

//	Implementation of Route grouping 
Route::prefix('admin') -> group(function(){
//The prefix is the one that nests 
    //the others within itself. 
    
Route::get("/", function(){
	echo "Admin Panel";

});

Route::get('/user', function() {
    //
    echo "User";
});
Route::get('/profile', function() {
    //
    echo " Profile";
});
Route::get('/settings', function() {
    //
    echo "Settings";
});
});

//Route naming  



Route::get('/page', function() {
    //
    return redirect() -> route('pageredirect');
    //This is the name of the route and it 
    //redirects to the /home/landingpage 
    //route that was redirected to. 
});
///controllers accept a request and give a response
Route::get('/home2','HomeController@index');




//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Creating a post route 
Route::get('/contact', 'ContactController@index');
//Route::post('/contact', 'HomeController@store') -> name('contact');
Route::post('/contact', 'ContactController@store')-> name('contact.store');

Route::get('/mail', 'MailController@index');
Route::post('/mail', 'MailController@store') -> name('mail.store');

Route::get('/login', 'LoginController@index');
Route::post('login', 'LoginController@store')-> name('user.login');

Route::get('success', function(){
    echo "<strong>Successful </strong>";
}) -> name('success');

Route::get('/send', 'MailController@index');

Route::get('/posts','PostsController@index');

Route::get('/seed', function (\flashnet\Post $post){
    $faker = \Faker\Factory::create();
    foreach(range(1,50) as $i){
        $post -> create([
            'title' => $faker -> sentence(10),
            'body' => $faker -> sentence(50)
        ]);
    }
    
});