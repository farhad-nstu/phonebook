<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/phonebook/{name}', function(){
	return redirect('/');
})->where('name', '[A-Z a-z]+');

Route::resource('phonebook', 'phonebookController');

Route::post('getData', 'phonebookController@getData');
