<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use App\Models\registerationcompany;
use Mockery\Generator\Method;

class adminController extends Controller
{
    // preg_match('/\badmin\b/', Session::get('user')['name'])
    //
    public function adminhome()
    {
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin') !== false) {
            return view('Admin.adminHome');
        }
        return redirect('adminlogin');
    }

    public function adminlogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:16'
        ]);
        // return $request;
        $admin = admin::where(['email' => $request->email])->first();
        if (!$admin || ($request->password != $admin->password)) {
            // return 'hello';
            return back()->with("fail", "Email or Password is not Match");

            // return "Wrong";
        } else {
            $request->session()->put('user', $admin);
            return redirect('adminhome');
        }

        // if (Session::has('user'))
        // {
        // return view('Admin.adminHome');
        // }
        //     return redirect('adminlogin');


    }

    public function insurancerequest()
    {
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin') !== false) {
            return view('Admin.insurancerequest');
        }
        return redirect('adminlogin');
    }

    public function claimrequest()
    {
        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        {
            return view('Admin.claimrequest');
        }
        return redirect('adminlogin');
    }

    public function company()
    {
        // $users = DB::table('registerationcompany')->get();
        $data = registerationcompany::all();
            // echo "<pre>";
            // var_dump($data);


        if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        {
            return view('company.company')->with('data',$data);
        }
        return redirect('adminlogin');
    }

    public function companyregistration(Request $request)
    {
        $com = new registerationcompany();
        $com->register_number=$request->register_number;
        $com->name=$request->name;
        $com->logo=$request->logo;
        $com->about=$request->about;
        $com->save();
        return redirect('company');

    }

    public function policyregistration(Request $request)
    {
        return $request;

        return view('Admin.policyregistration');
    }

    public function adminlogout()
    {
        Session::forget('user');
        return redirect('adminhome');
    }
}
