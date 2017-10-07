<?php
//
//Route::get('/category/add', function (){
//    return 'I am in category add';
//});
//
Route::get('/category', function (){
    return view('demo');
});

Route::get('/', 'WelcomeController@index');

Route::get('/support', 'WelcomeController@support');

Route::get('/about', 'WelcomeController@about');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/contact', 'WelcomeController@contact');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
