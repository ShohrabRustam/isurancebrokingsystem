<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_registration;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function HealthInsurance()
    {
        return view('InsuranceType.health');
    }

    public function LifeInsurance()
    {
        return view('InsuranceType.life');
    }

    public function BikeInsurance(){
        return view('InsuranceType.bike');
    }

    public function CarInsurance(){
        return view('InsuranceType.car');
    }

    public function registration(Request $req){

        $req->validate([
            "name" => "required|min:3",
            "email"=>"required|email|unique:user_registration",
            "password" => "required|min:6|max:16",
            "confirm_password" => "required_with:password|same:password|min:6"
        ]);

        $user=new user_registration();
        $user->name=$req->name;
        $user->email=$req->email;
        // $user->password=Hash::make($req->password);
        $user->password=$req->password;
        $user->save();

        return redirect('login');
        // $user= users::where(['email'=>$req->email])->first();
        // if(!$user || !check($req->password,$user->confirm_password) ){
        //     return back()->with("fail" ,"Password is not match");
        // }
        // else{
        //     return redirect('about');
        // }
        // dd($a);
        // return view('login')->with('loginError',$a);



    }


    public function login(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password' => 'required|min:4|max:16'
        ]);

        $user= user_registration::where(['email'=>$req->email])->first();
        if(!$user || ($req->password!=$user->password) ){
            return back()->with("fail" ,"Email or Password is not Match");
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
        // return $req;


    }

    public function logout(){
        Session::forget('user');
        return redirect('superadminlogin');
    }
    //
}
