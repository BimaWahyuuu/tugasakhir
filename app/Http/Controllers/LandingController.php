<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function main(){
        return view('user.homepage');
    }

    public function navbar(){
        return view('user.navbar');
    }

    public function user(){
        return view('user.saran');
    }
    
}
