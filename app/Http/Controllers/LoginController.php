<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){
        // return 'view';
        return view('admin.pages.login');
    }

    public function authenticate(Request $request){

        // return $request->all();
            //code...
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                // return $request->all();
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->back()->withErrors([
                'username' => 'invalid username',
                'password' => 'invalid Password',
            ]);
        
    }

    public function logout(){
        Auth::logout();
        return redirect(route('coba-coba'));
    }

}
