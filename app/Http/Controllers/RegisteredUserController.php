<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class RegisteredUserController extends Controller
{
    public function create (){
        return view('auth.register');
    }

    public function store(){
        $validated = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6','confirmed'],
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect('/jobs');
    }
}
