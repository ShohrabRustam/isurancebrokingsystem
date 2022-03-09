<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;


class adminController extends Controller
{
    //
    public function adminhome(){
        if (Session::has('user'))
        {
        return view('Admin.adminHome');
        }
            return redirect('adminlogin');

    }

    public function adminlogin(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:4|max:16'
        ]);
        // return $req;
        $admin= admin::where(['email'=>$request->email])->first();
        if(!$admin || ($request->password!=$admin->password) ){
            // return 'hello';
            return back()->with("fail" ,"Email or Password is not Match");

            // return "Wrong";
        }
        else
        {
            $request->session()->put('user',$admin);
            return redirect('adminhome');
        }

        // if (Session::has('user'))
        // {
        // return view('Admin.adminHome');
        // }
        //     return redirect('adminlogin');


    }
    // public

}
