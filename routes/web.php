<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\SuperAdminController;
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

//user route

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

Route::get('registration', function () {
    return view('registration');
});

Route::post('registration', [UserController::class, 'registration']);

Route::get('login', function () {
    return view('login');
});

Route::post('login', [UserController::class, 'login']);

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});

//Admin Route

Route::get('adminhome', [adminController::class, 'adminhome']);

Route::get('adminlogin', function () {
    return view('adminlogin');
});

Route::get('adminregistration',[SuperAdminController::class,'adminregistration']);


//Super Admin

//home page of the super admin
Route::get('superadminhome', function ()
{
    if (Session::has('user'))
    {
        return view('SuperAdmin.home');
    }
    return redirect('superadminlogin');
});


//all the user here in admin page

Route::get('userlist', function ()
{
    if (Session::has('user')) {
        return view('SuperAdmin.userlist');
    } else {
        return redirect('superadminlogin');
    }
});

    Route::get('adminregistration',[SuperAdminController::class,'adminregistration']);


    // Route::post('adminregistration',[SuperAdminController::class,'adminregistration']);

    //all the admin here in this link
    Route::get('adminlist', function () {
        if (Session::has('user')) {
            return view('SuperAdmin.adminlist');
        }
        else{
            return redirect('superadminlogin');
        }
    });

    //superadmin login page
    Route::get('superadminlogin', function () {
        return view('SuperAdmin.superadminlogin');
    });

    // super admun login authontication page with data base
    Route::post('superadminlogin', [SuperAdminController::class, 'superadminlogin']);

    //logout the super admin
    Route::get('superadminlogout', function ()
    {
        Session::forget('user');
        return redirect('superadminlogin');
    });


