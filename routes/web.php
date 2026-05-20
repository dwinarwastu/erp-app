<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', fn () => view('customers.index', ['active' => 'customers']))->name('customers.index');
Route::get('/customers/create', fn () => view('customers.form', ['active' => 'customers']))->name('customers.create');

Route::get('/services', fn () => view('services.index', ['active' => 'services']))->name('services.index');
Route::get('/services/create', fn () => view('services.form', ['active' => 'services']))->name('services.create');

Route::get('/subscriptions', fn () => view('subscriptions.index', ['active' => 'subscriptions']))->name('subscriptions.index');
Route::get('/subscriptions/create', fn () => view('subscriptions.form', ['active' => 'subscriptions']))->name('subscriptions.create');
