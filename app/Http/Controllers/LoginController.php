<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Rules\ReCaptcha;





class LoginController extends Controller
{
    //

    public function index(){
        // return 'view';
        // element attributes
    $attributes = [
    'data-theme' => 'dark',
    'data-type' => 'audio',
    ];
    return view('admin.pages.login',compact('attributes'));
    }

    public function authenticate(Request $request)
    {
        {
            $validated = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
                'g-recaptcha-response' => 'required|captcha'
            ]);
    
            $find_user = User::where('username', $validated['username'])->first();
            if (!$find_user) {
                // return error user not found
                return redirect()->back();
            }
    
            if (!Hash::check($validated['password'], $find_user->password)) {
                // return error user wrong password,
                return redirect()->back()->with('error', 'silahkan cek kembali username dan password anda');
            }
            if ($find_user->status == 'nonaktif'){
                return redirect()->back()->with('error', 'akun anda tidak aktif, silahkan hubungi orang pusat!!!');
              }
            Auth::login($find_user);
            $request->session()->regenerate();
            // return $request->all();
            return redirect()->intended(route('admin.dashboard'));
             
        }   
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


}
