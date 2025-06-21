<?php

use App\Livewire\FullComp;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('client.index');
})->name('home');

Route::get('/login', function () {
    return view('client.auth.login');
})->name('login');
Route::get('/register', function () {
    return view('client.auth.register');
})->name('register');

