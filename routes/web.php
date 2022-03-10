<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Models\superadmin;
use App\Models\user_registration;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|@auther Rustam
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// @auther Rustam

//user route
Route::get('/', [UserController::class, 'home']);

//About page
Route::get('about', [UserController::class, 'about']);

//Contact Page
Route::get('contact', [UserController::class, 'contact']);

//Health Insurance Page
Route::get('HealthInsurance', [UserController::class, 'HealthInsurance']);

//Life Insurance Page
Route::get('LifeInsurance', [UserController::class, 'LifeInsurance']);

//Bike Insurance Page
Route::get('BikeInsurance', [UserController::class, 'BikeInsurance']);

//Car Insurance
Route::get('CarInsurance', [UserController::class, 'CarInsurance']);

//registration form
Route::get('registration', function () {
    return view('registration');
});

// for registration by user
Route::post('registration', [UserController::class, 'registration']);

// login form
Route::get('login', function () {
    return view('login');
});

// login by user
Route::post('login', [UserController::class, 'login']);

//logout for user
Route::get('logout', [UserController::class, 'logout']);

#################################################################################################################################################################
//@auther Rustam
#################################################################################################################################################################
/*
**
**
**
**
**
*/
//Admin Route

//admin home page
Route::get('adminhome', [adminController::class, 'adminhome']);

// admin insurancerequest
Route::get('insurancerequest', [adminController::class,'insurancerequest']);

// admin claimrequest page
Route::get('claimrequest', [adminController::class, 'claimrequest']);

//company page
Route::get('company', [adminController::class, 'company']);

Route::get('companyregistration',function(){
    return view('Admin.company_registration');
});

//admin login page
Route::get('adminlogin', function () {
    return view('Admin.adminlogin');
});

// login by admin
Route::post('adminlogin', [adminController::class, 'adminlogin']);

//admin logout
Route::get('adminlogout', [adminController::class,'adminlogout']);


#####################################################################################################################################################################
//@auther Rustam
#####################################################################################################################################################################

//Super Admin

//home page of the super admin
Route::get('superadminhome', [SuperAdminController::class,'superadminhome']);

//all the user details
Route::get('userlist', [SuperAdminController::class,'userlist']);

//all the admin here in this link
Route::get('adminlist', [SuperAdminController::class,'adminlist']);

//for admin registration form
Route::get('adminregistration', function () {
    return view('SuperAdmin.adminregistration');
});

//admin registration
Route::post('adminregistration', [SuperAdminController::class, 'adminregistration']);

//superadmin login page
Route::get('superadminlogin', function () {
    return view('SuperAdmin.superadminlogin');
});

// super admun login authontication page with data base
Route::post('superadminlogin', [SuperAdminController::class, 'superadminlogin']);


//logout the super admin
Route::get('superadminlogout',[SuperAdminController::class,'superadminlogout']);
