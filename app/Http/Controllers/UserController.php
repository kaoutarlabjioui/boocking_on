<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    }

    public function showUsers(){
        $users = User::get();

        return view('content.users' , compact('users'));
    }


}
