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

use App\command as command;

Route::get('/', function () {
    return view('index');
});

Route::get('apropos',function(){
    return view('about');
});

Route::get('contact',function(){
    return view('contact');
});

Route::get('commander',function(){
    return view('commander');
});

Route::get('admin',function(){

    $commands = command::orderBy('created_at','desc')->paginate(5);
    return view('admin',compact('commands'));
})->middleware('administrateur');

Route::get('marque',function(){
    return view('marque');
});


Route::post('commander','CommandController@store');
Route::delete('commander/{id}','CommandController@destroy');


Auth::routes();
Route::get('/home',function(){
    return view('index');
});
