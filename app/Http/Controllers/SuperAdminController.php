<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\superadmin;
use Laravel\Ui\Presets\React;
use App\Models\admin;

class SuperAdminController extends Controller
{

    public function superadminlogin(Request $req){
        $req->validate([
            'gmail'=>'required|email',
            'password' => 'required|min:4|max:16'
        ]);
        // return $req;
        $user= superadmin::where(['gmail'=>$req->gmail])->first();
        if(!$user || ($req->password!=$user->password) ){
            // return 'hello';
            return back()->with("fail" ,"Email or Password is not Match");

            // return "Wrong";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('superadminhome');
        }
    }


    public function adminregistration ()
    {
       return  view('SuperAdmin.adminregistration');
    }

}