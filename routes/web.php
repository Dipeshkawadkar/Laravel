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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin', 'AdminController@index');




Route::get('/index',function(){
	return view('index');
});

Route::get('/6-budgety/index',function(){
	return view('/6-budgety/index');
});
Route::get('/About',function(){
	return view('About.About');
});

// Route::get('/Contact',function(){
// 	return view('Contact.Contact');
// });

Route::get('/Trips',function(){
	return view('Trips.Trips');
});

Route::get('/Backpacking',function(){
	return view('Backpacking.Backpacking');
});

Route::get('/canoe',function(){
	return view('canoe.canoe');
});

Route::get('/faq',function(){
	return view('faq.faq');
});

Route::get('/packraft',function(){
	return view('packraft.packraft');
});

Route::get('/photography',function(){
	return view('photography.photography');
});

Route::get('/Planning',function(){
	return view('Planning.Planning');
});

Route::get('/Rafting',function(){
	return view('Rafting');
});


Route::get('/contact', function(){
	return view('contact');
});
 Route::post('/contact', 'ContactController@contact');
 