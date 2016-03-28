<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function(){
	return view('pages.about');
});

Route::get('/degree', function(){
	return view('pages.degree');
});

Route::get('/degree/cag', function(){
	return view('pages.degrees.cag');
});

Route::get('/degree/cas', function(){
	return view('pages.degrees.cas');
});

Route::get('/degree/cbaa', function(){
	return view('pages.degrees.cbaa');
});

Route::get('/degree/ced', function(){
	return view('pages.degrees.ced');
});

Route::get('/admission/{admission}', function($admission){
	return view('pages.admission', compact('admission'));
});

