<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use App\Models\companyregistration;


class adminController extends Controller
{
    // preg_match('/\badmin\b/', Session::get('user')['name'])
    //
    public function adminhome(){
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
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
        // return $request;
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

    public function insurancerequest(){
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        {
            return view('Admin.insurancerequest');
        }
        return redirect('adminlogin');
    }

    public function claimrequest(){
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        {
            return view('Admin.claimrequest');
        }
        return redirect('adminlogin');
    }

    public function company(){
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        {
            return view('Admin.company');
        }
        return redirect('adminlogin');
    }

    public function companyregistration(Request $request)
    {
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        {
            $request->validate([
                'register_number'=>'required|unique',
                'name' => 'required|min:4',
            ]);

            $com = new companyregistration();
            $com->register_number=$request->register_number;
            $com->name=$request->name;
            $com->logo=$request->logo;
            $com->about=$request->about;
            $com->save();
            return redirect('company');
        }
        return redirect('adminlogin');


    }



    public function adminlogout(){
        Session::forget('user');
        return redirect('adminhome');
    }

}
