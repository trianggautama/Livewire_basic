<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/', App\Livewire\Home::class)->name('home');
    Route::get('/about', App\Livewire\About::class)->name('about');
    Route::get('/contact', App\Livewire\Contact::class)->name('contact');
    Route::get('/post', App\Livewire\Post\Index::class)->name('post.index');
    Route::get('/users/{user}', App\Livewire\Users\Show::class)->name('users.show');
});


Route::get('/login', App\Livewire\Login::class)->name('login')->middleware('guest');
