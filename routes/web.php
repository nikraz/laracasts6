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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/wildcard/{wildcard}', function ($wildcard) {
    $wildcards = [
        'one' => 'First wildcard!',
        'two' => 'Second wildcard!',
        'three' => 'Third wildcard!',
    ];

    if (! array_key_exists($wildcard,$wildcards)) {
        abort(404, 'Sorry not found!');
    }

    return view('wildcard', [
        'wildcard' => $wildcards[$wildcard]
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');