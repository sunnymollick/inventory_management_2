<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller{
    public function login(){
        if(Session::has('userid')){
            return redirect()->to('dashboard');
        }
        return view('backend.pages.auth.login');
    }

    public function register(){
        return view('backend.pages.auth.register');
    }

    public function loginStore(Request $request){
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email','=',$email)->first();
        if(Hash::check($password, $user->password)) { // password matched
                Session::put('userid',$user->id);
                Session::put('useremail',$user->email);
                return redirect()->to('/dashboard');
            }
            else {
                return redirect()->to('/');
            }

    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function registerStore(Request $request){
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $password = Hash::make($request->password);

        $user = new User();
        $user->name = $first_name.' '.$last_name ;
        $user->email = $email;
        $user->password = $password;

        if ($user->save()) {
            return redirect('/');
        }
    }
}
