<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('HealthInsurance', function () {
    return view('InsuranceType.health');
});
Route::get('BikeInsurance', function () {
    return view('InsuranceType.bike');
});
Route::get('CarInsurance', function () {
    return view('InsuranceType.car');
});

Route::get('login', function () {
    return view('login');
});

Route::get('registration', function () {
    return view('registration');
});
