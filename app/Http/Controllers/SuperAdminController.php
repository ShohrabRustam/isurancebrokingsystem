<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\superadmin;
use Laravel\Ui\Presets\React;
use App\Models\admin;
use Illuminate\Support\Facades\Session;
// use Illuminate\Validation\Validator\validate;

class SuperAdminController extends Controller
{
    public function superadminhome(){
        if (Session::has('user') && Session::get('user')['gmail']=='superadmin@gmail.com') {
            return view('SuperAdmin.home');
        }
        return redirect('superadminlogin');
    }

    public function userlist(){
        if (Session::has('user') && Session::get('user')['gmail']=='superadmin@gmail.com') {
            return view('SuperAdmin.userlist');
        } else {
            return redirect('superadminlogin');
        }
    }

    public function adminlist(){
        if (Session::has('user') && Session::get('user')['gmail']=='superadmin@gmail.com') {
            return view('SuperAdmin.adminlist');
        } else {
            return redirect('superadminlogin');
        }
    }

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


    public function adminregistration(){
        if (Session::has('user') && Session::get('user')['gmail']=='superadmin@gmail.com') {
         return  view('SuperAdmin.adminregistration');
        }
        return redirect('superadminlogin');
    }

    public function adminregistrations(Request $req){

        $req->validate([
            "name" => "required|min:3",
            "email"=>"required|email|unique:admin",
            "password" => "required|min:4|max:16",
            "mobile"=>  "required",
            "confirm_password" => "required_with:password|same:password|min:6"
        ]);
        if (Session::has('user') && Session::get('user')['gmail']=='superadmin@gmail.com') {
        $adm = new admin();
        $adm->name=$req->name;
        $adm->email=$req->email;
        $adm->mobile=$req->mobile;
        $adm->password=$req->password;
        $adm->save();
        return redirect('adminlogin');
        }

    }

    public function superadminlogout()
    {

        Session::forget('user');
        return redirect('superadminlogin');
    }

}
