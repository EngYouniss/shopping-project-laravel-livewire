<?php

use App\Livewire\Client\Auth\ClientLoginComponent;
use App\Livewire\FullComp;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('client.index');
})->name('home')->middleware('auth');

Route::prefix('user')->group(function () {

    Route::get('/login', function () {
        return view('client.auth.login');
    })->name('user.login');
    // Route::get('/login',ClientLoginComponent::class)->name('user.login');
    Route::get('/register', function () {
        return view('client.auth.register');
    })->name('user.register');
});

Route::prefix('admin')->group(function () {

    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('admin.login');
    // Route::get('/register', function () {
    //     return view('admin.auth.register');
    // })->name('admin.register');

    Route::get('/dashboard',function(){
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('/settings',function(){
        return view('admin.settings.setting');
    })->name('admin.settings');
    Route::get('/products',function(){
        return view('admin.products.products');
    })->name('admin.products');
    Route::get('/categories',function(){
        return view('admin.categories.categories');
    })->name('admin.categories');
     Route::get('/orders',function(){
        return view('admin.orders.orders');
    })->name('admin.orders');
});




