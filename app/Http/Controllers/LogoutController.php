<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    function index(Request $request){
       
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // session()->forget("LOGGED_IN",true);
        return redirect('login');
    }
    
}   