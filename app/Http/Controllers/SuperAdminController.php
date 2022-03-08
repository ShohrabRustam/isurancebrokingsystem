<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\superadmin;

class SuperAdminController extends Controller
{
    //
    public function superadminhome(){
        return view('SuperAdmin.home');
    }

    public function superadminlogin(Request $req){
        return $req;
    }
}
