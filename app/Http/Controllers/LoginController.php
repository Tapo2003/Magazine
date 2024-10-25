<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function save(Request $request){
        
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if(Auth::attempt($validate,$request->input('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'The Provided credentials do not match our records',
        ]);
        return view('auth.sign-in');
    }
    
}
