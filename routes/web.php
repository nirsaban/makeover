<?php


Route::get('/', 'HomeController@index');

Route::get('/form', function(){
return view('partials.form');
});


Route::post('/orders', 'OrderController@store');
