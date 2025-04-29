<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:3|max:50|unique:users,username',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
        ]);

        // $validateData['password'] = Hash::make($validateData['password']);
        // karena di model user passwordnya sudah di hash maka disini tidak usah di hash lagi

        User::create($validateData);
        $request->session()->flash('success', 'Registration successful! please login');
        return redirect('/login');
    }
}
