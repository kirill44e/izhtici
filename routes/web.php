<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/', 'App\Http\Controllers\ContactController@callback')->name('callback');

Route::middleware('auth')->group(function(){
  Route::get('/user', function () {
    return view('user');
  })->name('user');
  Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
  Route::get('/user/all/{id}/delete', 'App\Http\Controllers\ContactController@delete')->name('contact-delete');
  Route::post('/user/all/{id}/update', 'App\Http\Controllers\ContactController@update_submit')->name('contact-update-submit');
  Route::get('/user/all/{id}/update', 'App\Http\Controllers\ContactController@update')->name('contact-update');
  Route::get('/user/all/{id}', 'App\Http\Controllers\ContactController@oneMessage')->name('contact-data-one');
  Route::get('/user/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
  Route::post('/user/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
});

Route::middleware('guest')->group(function(){
  Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
  Route::post('/login_process', [App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
  Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
  Route::post('/register_process', [App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
});
