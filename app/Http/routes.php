<?php

Route::get('/', function ()
{
    return redirect('/podex');
});

Route::get('/podex', 'PokemonController@index');
Route::get('/podex/pokemon/{id}', 'PokemonController@ajaxRequest');
