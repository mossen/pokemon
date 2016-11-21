<?php

Route::get('/', function ()
{
    return redirect('/podex');
});

Route::get('/podex', 'ProductController@index');
Route::get('/podex/pokemon/{id}', 'ProductController@ajaxRequest');
