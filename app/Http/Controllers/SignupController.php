<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SignupController extends Controller
{
    public function save(Request $request){
        $validate = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = new User();
        $date = date("Y-m-d H:i:s");
        $user->insert([
            'fullname'      =>  $request->fname.' '.$request->lname,
            'email'         =>  $request->email,
            'created_at'    =>  $date,
            'updated_at'    =>  $date,
            'password'      =>  Hash::make($request->input('password'))
        ]);
        return redirect('login');
    }
    
}
