<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required|max:255',
            'password' => 'required'
        ]);

        auth() -> attempt($request->only('email', 'password'));

        return redirect()->route('admin');
    }
}