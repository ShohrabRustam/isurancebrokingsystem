<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_registration;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Session;
use App\Models\policyregistration;

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
        $data = policyregistration::all();
        // return $data[1];
        // return dd($data['policyname']);
        // echo "<pre>";
        // return $data[0]['policyname'];

        // var_dump($data->policyname);
        // die;

        return view('InsuranceType.health')->with('data',$data);
    }

    public function LifeInsurance()
    {
        $data = policyregistration::all();

        return view('InsuranceType.life')->with('data',$data);
    }

    public function BikeInsurance(){
        $data = policyregistration::all();

        return view('InsuranceType.bike')->with('data',$data);
    }

    public function CarInsurance(){
        $data = policyregistration::all();

        return view('InsuranceType.car')->with('data',$data);
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

    public function logout()
    {
        Session::forget('user');
        return redirect('login');
    }
}
