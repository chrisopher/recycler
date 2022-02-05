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



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     $posts = App\Post::all();
//     return view('home', compact('posts'));
// });

// 	Route::get('/', function() {
//     $posts = App\Post::all();
// 	return view('welcome', compact('posts'));
// });
Route::get('/', function(){
 	$project = App\Project::all();
	$membr = App\Member::all();
	$quot = App\Quote::all();
	$process = App\Processtable::all();
	$dat = App\Data::all();
	return view('welcome', compact('membr','project','quot','process','dat')); }
);


Route::post('/', ['as'=>'email.store','uses'=>'emailController@emailPost']);

// Route::get('/', function($slug){
//  	$post = App\Post::first();
// 	return view('welcome', compact('post')); });

// 	Route::get('/{slug}', function($slug){
// 	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
// 	return view('post', compact('post'));
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// for contact form
Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']); 
// for email subscribe 


// Route::get('post/{slug}', function($slug){
// 	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
// 	return view('post', compact('post'));
// });
