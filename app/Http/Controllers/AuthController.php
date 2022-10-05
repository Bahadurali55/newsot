<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // $user = Auth::user();
            $user = auth::user();
            if ($user->hasRole('admin'))
                return view('admins.index');
            if ($user->hasRole('student'))
                return view('students.index');
            if ($user->hasRole('instructor'))
                return view('instructors.index');
        }
    }
}