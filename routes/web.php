<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('forma');
Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('DataContact');
Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@showMessage')->name('DataContactOne');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@updateMessage')->name('DataContactUpdate');
Route::post('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@updatedMessageSubmit')->name('DataContactUpdatedSubmit');
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\ContactController@deleteMessage')->name('DataContactDelete');
