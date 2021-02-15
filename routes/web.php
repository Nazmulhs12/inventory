<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/add-category', 'CategoryController@addCategory')->name('add-category');
Route::post('/save-category', 'CategoryController@saveCategory')->name('save-category');
Route::get('/edit-category/{id}', 'CategoryController@editCategory')->name('edit-category');
Route::post('/update-category', 'CategoryController@updateCategory')->name('update-category');
