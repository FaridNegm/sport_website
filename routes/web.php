<?php


Route::get('/', function () {
    return view('website/index');
});

Route::get('/all-matches', function () {
    return view('website/allmatches');
});

Route::get('/teams', function () {
    return view('website/teams');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
