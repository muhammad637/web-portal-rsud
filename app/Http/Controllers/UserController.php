<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{



    public function index()
    {
        return view('admin.pages.user.index', [
            'users' => User::orderBy('created_at', 'desc')->get(),
            'title' => 'user'
        ]);
    }

    public function userCreate()
    {
        return view('admin.pages.user.create');
    }

    public function userStore(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required|min:8'
            ]
            );
            
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::create([
                'name' => $validatedData['name'],
                'username' => $validatedData['username'],
                'password' => $validatedData['password']
                
            ]);
            return redirect(route('admin.user'))->with('succes', 'user berhasil ditambahkan');
    }
    //
}
