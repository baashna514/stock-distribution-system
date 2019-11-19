<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login_page(){
        if(Auth::user()){
            return redirect()->route('admin.dashboard');
        }
        return view('login-page');
    }
    public function check_login_credentials(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required',

        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'user_type' => $request->get('user_type'),
        );
        // dd($user_data);
        $user_type = $request->input('user_type');
        if(\Auth::attempt($user_data)){
            if($user_type == 'admin'){
                return redirect()->route('admin.admin-dashboard');
            }
            if($user_type == 'distributor'){
                // return 'distributor';
                return redirect()->route('distributor.distributor-dashboard');
            }
            if($user_type == 'customer'){
                // return 'customer';
                return redirect()->route('customer.customer-dashboard');
            }
        }
        else{
            $request->session()->flash('alert-danger', 'Username or Password not matched.');
            return back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('user-login');
    }
}
