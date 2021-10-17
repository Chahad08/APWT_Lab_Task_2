<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    
    function Login()
    {
        return view('pages.login');
    }
    function home()
    {
        return view('pages.home');
    }
    function cheakUser(Request $request)
    {
        $user=array("name"=>"Chahad","password"=>"321");
        $name=$request->input('name');
        $password=$request->input('password');
        if($name==$user['name'] && $password==$user['password'])
        {
            return redirect(route('home')) ;
        }
        else{
            return "Your username and password incorrect";
        }
        
    }
    function register()
    {
        return view('pages.register');
    }
    function user($name,$password)
    {
        $data=array();

    }
    function createAccount(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'dob'=>'required',
            'email'=>'email'
        ]
        );
        return redirect(route('login'));
    }
    
}
