<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\giftshop\Giftshop;
use App\Http\Controllers\auth\AuthUser;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/destination-details', function () {
    return view('destination_details');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services-details', function () {
    return view('service_details');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/activities-details', function () {
    return view('activities_details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog_details');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/giftshop', [Giftshop::class, 'index'])->name('giftshop.index');
Route::post('/register', [AuthUser::class, 'register'])->name('register');
Route::post('/signin', [AuthUser::class, 'signin'])->name('signin');

// Route::middleware(['users'])->group(function () {
    Route::get('/cart', [Giftshop::class, 'add_to_cart'])->name('cart');
// });
