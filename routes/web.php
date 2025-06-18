<?php

use App\Livewire\FullComp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/full',FullComp::class)->name('full');
