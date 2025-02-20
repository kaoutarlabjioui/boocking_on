<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view("loginForm");
    }

    public function showForm()
    {
        return view("registerForm");
    }


    public function register(Request $request)
    {
       $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'role_id'=>'required'

      ]);

      User::create([ 'fname'=>$request->input('fname'),
      'lname'=>$request->input('lname'),
      'phone'=> $request->input('phone'),
      'email'=> $request->input('email'),
      'password'=>Hash::make($request->input('password')),
      'role_id'=>$request->role_id]);
      Session::flash('success', 'Registration successful. Please login.');
    //   return redirect('/login');
     return redirect()->route('login');

    }

    public function login(Request $request){
        $getUser = $request->only('email','password');

        if(Auth::attempt($getUser)){
            $user = Auth::user();
            session(['user_id'=>$user->id,'user_fname'=>$user->fname, 'user_lname'=>$user->lname]);
            if($user->role_id === 1){
                return redirect()->route('show.salles');
            }else{
                return redirect()->route('show.salles.reservation');
            }
        }
        return redirect()->route('login')->with('error','Invalide email r password');

    }



}
