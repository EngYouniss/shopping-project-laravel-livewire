<?php

use App\Livewire\Client\Categories\Auth\ClientLoginComponent;
use App\Livewire\Client\Categories\CategoriesComponent;
use App\Livewire\Client\Categories\CategoryProductsComponent;

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

    Route::get('/products', function () {
        return view('client.products.products');
    })->name('client.products');
    Route::get('/about-us', function () {
        return view('client.about.about');
    })->name('about-us');
    Route::get('/contact-us', function () {
        return view('client.contact.contact_us');
    })->name('contact-us');
});

Route::prefix('admin')->group(function () {

    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('admin.login');
    // Route::get('/register', function () {
    //     return view('admin.auth.register');
    // })->name('admin.register');

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('/settings', function () {
        return view('admin.settings.setting');
    })->name('admin.settings');
    Route::get('/products', function () {
        return view('admin.products.products');
    })->name('admin.products');
    Route::get('/categories', function () {
        return view('admin.categories.categories');
    })->name('admin.categories');
    Route::get('/orders', function () {
        return view('admin.orders.orders');
    })->name('admin.orders');

    Route::get('/sliders', function () {
        return view('admin.sliders.sliders');
    })->name('admin.sliders');


    Route::get('/users', function () {
        return view('admin.users.users');
    })->name('admin.users');

    Route::get('/offers', function () {
        return view('admin.offers.offers');
    })->name('admin.offers');
    Route::get('/messages', function () {
        return view('admin.message.messages');
    })->name('admin.messages');
});
