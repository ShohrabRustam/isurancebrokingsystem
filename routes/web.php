<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Models\user_registration;
use Illuminate\Support\Facades\Session;


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
Route::get('LifeInsurance', function () {
    return view('InsuranceType.life');
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

Route::post('login', [UserController::class,'login']);


Route::get('registration', function () {
    return view('registration');
});

Route::get('logout', function(){
    Session::forget('user');
    return redirect('login');
});


Route::post('registration',[UserController::class,'registration']);

Route::get('admin',[adminController::class,'adminindex']);

