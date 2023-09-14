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

    public function nonaktif(User $user){
        
        $status = 'nonaktif';
        $user->update(['status' => $status]);
        return redirect()->back()->with('success', 'akun berhasil dinonaktifkan');
    }

    public function aktif(User $user){
        $status = 'aktif';
        $user->update(['status' => $status]);
        return redirect()->back()->with('success', 'akun berhasil diaktifkan');
    }

    public function edit(User $user){
        return view('admin.pages.user.edit');
    }

    public function userUpdate(Request $request, User $user){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required',
            'password' => 'required|min:8'
        ]);
        if ($validatedData['password']  == null) {
            $validatedData['password'] = $user->password;
        } else {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }
        $user->update($validatedData);
        return redirect()->route('admin.user')->with('success', 'Profil berhasil diperbarui.');
    }
    //
}
