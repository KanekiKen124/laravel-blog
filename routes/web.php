<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/post', 'post');
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/signup', 'signup')->name('signup');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('/signup', 'signup')->name('register');
    Route::post('/signin', 'signin')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});