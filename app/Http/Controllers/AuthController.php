<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create (Request $request)
    {


                session()->flash('flash.message', 'User Created successfully');
                session()->flash('flash.type','success');
        if (!Auth::check())
        {
            return inertia('Auth/Login');
         }
        else return redirect()->intended(route('dashboard'));
    }

    public function store (Request $request)
    {
           //dd($request->all());
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);


            if (Auth::attempt($credentials,$request->remember)) {
                $request->session()->regenerate();

                return redirect()->intended();
            }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
            {
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect()->back();
            }

}
