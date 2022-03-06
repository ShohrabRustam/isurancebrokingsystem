<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_registration;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password' => 'required|min:4|max:16'
        ]);

        $user= user_registration::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password) ){
            return back()->with("fail" ,"Email or Password is not Match");
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
        // return $req;


    }
    //
}
