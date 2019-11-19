<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function distributor_dashboard(){
        if(!Auth::user()){
            return redirect()->route('user-login');
        }
        return view('distributor.distributor-dashboard');
    }
}
