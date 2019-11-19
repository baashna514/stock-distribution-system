<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create_account(){
        return view('register-page');
    }

    public function create_account_action(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type = $request->user_type;
        $user->save();
        $request->session()->flash('alert-success', 'Congratulation, you are registered successfully!');
        return back();
    }
}
