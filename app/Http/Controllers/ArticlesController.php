<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function addUser(){
        return view('addUser');
    }

    public function saveUser(Request $request){
        // validating the form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($request->all());

        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        $arti = new User();
        $arti->name = $name;
        $arti->email = $email;
        $arti->password = $password;

        $arti->save();

        return redirect('/login')->with('success', 'Registered successfully');
    }

    public function loginUser(Request $request){
        // validating the form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($request->all());
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');

        }else{
            return back()->with('fail', 'user not found');
    }
}
        

    public function logout(){
        auth()->logout();

        return redirect('/login');
    }

}
