<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){

        if($req->isMethod("post")){
            $data = $req->only("email","password");

            if(Auth::attempt($data)){
                return redirect()->route("homepage");
            }
            else{
                return ['error' => "Login failed"];
            }
        }
        return view("login");
    }
    public function register(Request $req){

        if($req->isMethod("post")){
            $data = $req->validate([
                'email' => 'required',
                'name' => 'required',
                'password' => 'required',
            ]);

        
            User::create($data);
            return redirect()->route("login");

        }
        return view("signup");
    }
}
