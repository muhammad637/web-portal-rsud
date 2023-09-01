<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function profile()
    {
        return view('admin.pages.profile.index');
    }
    //

    public function passwordProfile(Request $req, User $user){

        $validateData = $req->validate([
            'password' => 'required',
            'newPassword' => 'required|min:8',
        ]);

        $password = Hash::check($validateData['password'],
        $user->password);
        if ($password) {
            $user->update(['password' => Hash::make($validateData
            ['newPassword'])]);
            Auth::logout();
            $req->session()->invalidate();
            $req->session()->regenerateToken();
            return redirect('/login')->with('sucess', 'password berhasil diupdate');
        }
    }
}




























