<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Rules\ReCaptcha;


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
                'g-recaptcha-response' => ['required', new ReCaptcha]
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                // return $request->all();
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->back()->withErrors([
                'username' => 'invalid username',
                'password' => 'invalid Password',
                'g-recaptcha-response' => ['required', new ReCaptcha]
            ]);
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


}
