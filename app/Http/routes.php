<?php
// Client Route Group
Route::group(['prefix' => ''], function () {
    Route::get('/', function () {
	    return view('Client::home');
	});
});

// Admin Route Group
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
	    return view('Admin::home');
	});
});
