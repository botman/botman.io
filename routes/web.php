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

Route::get('/', 'DocumentationController@landing');
Route::get('/imprint', function () {
    return view('imprint')->with('title', 'Imprint');
});

Route::get('/{version?}/{page?}', 'DocumentationController@show');
