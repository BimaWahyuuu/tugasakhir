<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main(){
        return view('admin.Dashboard.dashboard');
    }
    public function admin(){
        return view('admin.Dashboard.admin');
    }
}
