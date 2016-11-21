<?php

Route::get('/', function ()
{
    return redirect('/home');
});

Route::get('/home', 'ProductController@index');
Route::post('/home', 'ProductController@handel');