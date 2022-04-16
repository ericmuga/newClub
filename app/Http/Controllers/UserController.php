<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
           'email'=>['required','unique:users,email'],
           'name'=>'required',
           'phone'=>['required','unique:users,phone'],
           'field_id'=>'required',
           'password'=>'required'


        ]);
        User::create($request->all());
    }
}
