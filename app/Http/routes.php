<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




//|=========== ROUTE GUEST ============

Route::get('/',function(){
    $date = date('D-d M Y');
    return view('welcome',compact('date'));
});

Route::get('/login','UserController@getLogin')
    ->name('get.login');

Route::post('/login','UserController@postLogin')
    ->name('post.login');

Route::get('/register','UserController@getRegister')
    ->name('get.register');

Route::post('/register','UserController@postRegister')
    ->name('post.register');

Route::group(['middleware'=>'web'],function (){
    Route::get('/logout','UserController@getLogout')
        ->name('get.logout');

    Route::get('/profile/{id}','UserController@getProfile')
        ->name('get.profile');

    Route::put('/profile/{id}','UserController@postProfile')
        ->name('post.profile');

    Route::get('/image/{filename}','UserController@getUserImage')
        ->name('get.user.image');

    Route::get('/pokemon/image/{filename}','PokemonController@getPokemonImage')
        ->name('get.pokemon.image');

    Route::get('/pokemon','PokemonController@getAllPokemon')
        ->name('get.pokemon');

});