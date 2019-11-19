<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_dashboard(){
        if(!Auth::user()){
            return redirect()->route('user-login');
        }
        return view('customer.customer-dashboard');
    }
}
