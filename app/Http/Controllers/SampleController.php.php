<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController.php extends Controller
{
    public function index(Request $request){
        return view('view');
    }

    public function save(Request $request){
        $validate = $request->validate([
            'key' => 'required/string',
            'key' => 'required/image',
        ]);
        return view('view');
    }
    
}
