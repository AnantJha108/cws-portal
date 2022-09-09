<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        $data['category'] = Category::all();
        if($req->isMethod("post")){
            $data = $req->only("email","password");

            if(Auth::attempt($data)){
                return redirect()->route("homepage");
            }
            else{
                return ['error' => "Login failed"];
            }
        }
        return view("login",$data);
    }
    public function register(Request $req){
        $data['category'] = Category::all();
        if($req->isMethod("post")){
            $data = $req->validate([
                'email' => 'required',
                'name' => 'required',
                'password' => 'required',
            ]);

        
            User::create($data);
            return redirect()->route("login");

        }
        return view("signup",$data);
    }

    public function logout(){
        Auth::guard("web")->logout();
        return redirect()->route("login");
    }

    public function adminLogin(Request $req){
        $data['category'] = Category::all();
        if($req->isMethod("post")){
            $data = $req->only("email","password");

            if(Auth::attempt($data)){
                return view("admin.dashboard");
            }
            else{
                return ['error' => "Login failed"];
            }
        }
        return view('admin.login',$data);
    }

    public function adminLogout(){
        Auth::guard("admin")->logout();
        return redirect()->route("admin.login");
    }
}
